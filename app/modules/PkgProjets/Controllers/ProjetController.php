<?php

namespace Modules\PkgProjets\Controllers;

use Modules\PkgProjets\App\Exceptions\ProjectAlreadyExistException;
use App\Http\Controllers\Controller;
use Modules\PkgProjets\App\Imports\ProjetImport;
use Modules\PkgProjets\Models\Projet;
use Illuminate\Http\Request;
use Modules\PkgProjets\App\Requests\projetRequest;
use Modules\PkgProjets\Services\ProjetService;
use Modules\Core\Controllers\Base\AdminController;
use Carbon\Carbon;
use Modules\PkgProjets\App\Exports\projetExport;
use Modules\PkgProjets\Services\TagService;
use Maatwebsite\Excel\Facades\Excel;

class ProjetController extends AdminController
{
    protected $projectService;
    public function __construct(ProjetService $projetService)
    {
        $this->projectService = $projetService;
    }

    // public function index(){
    //     dd("dd bo");
    //     return "index bonojur";
    // }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $searchValue = $request->get('searchValue');
            if ($searchValue !== '') {
                $searchQuery = str_replace(' ', '%', $searchValue);
                $projectData = $this->projectService->searchData($searchQuery);
                return view('PkgProjets::projet.index', compact('projectData'))->render();
            }
        }
        $projectData = $this->projectService->paginate();
      
        return view('PkgProjets::projet.index', compact('projectData'));
    }


    public function create(TagService $tagService)
    {
        $dataToEdit = null;
        $tags = $tagService->all();
        return view('PkgProjets::projet.create', compact('dataToEdit', 'tags'));
    }


    public function store(projetRequest $request)
    {

        try {
            $validatedData = $request->validated();
            $this->projectService->create($validatedData);
            return redirect()->route('projets.index')->with('success', __('PkgProjets::projet.singular') . ' ' . __('Core::app.addSucées'));
        } catch (ProjectAlreadyExistException $e) {
            return back()->withInput()->withErrors(['project_exists' => __('PkgProjets::projet.singular') . ' ' . __('Core::app.existdeja')]);
        } catch (\Exception $e) {
            return abort(500);
        }
    }


    public function show(string $id)
    {
        $fetchedData = $this->projectService->find($id);
        return view('PkgProjets::projet.show', compact('fetchedData'));
    }


    public function edit(string $id,TagService $tagService)
    {
        $dataToEdit = $this->projectService->find($id);
        $dataToEdit->date_debut = Carbon::parse($dataToEdit->date_debut)->format('Y-m-d');
        $dataToEdit->date_de_fin = Carbon::parse($dataToEdit->date_de_fin)->format('Y-m-d');
        $tags = $tagService->all();

        return view('PkgProjets::projet.edit', compact('dataToEdit','tags'));
    }


    public function update(projetRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $this->projectService->update($id, $validatedData);
        return redirect()->route('projets.index', $id)->with('success', __('PkgProjets::projet.singular') . ' ' . __('Core::app.updateSucées'));
    }


    public function destroy(string $id)
    {
        $this->projectService->destroy($id);
        return redirect()->route('projets.index')->with('success', __('PkgProjets::projet.singular') . ' ' . __('Core::app.deleteSucées'));
    }


    public function export()
    {
        $projects = projet::all();

        return Excel::download(new ProjetExport($projects), 'projet_export.xlsx');
    }


    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new ProjetImport, $request->file('file'));
        } catch (\InvalidArgumentException $e) {
            return redirect()->route('projets.index')->withError('Le symbole de séparation est introuvable. Pas assez de données disponibles pour satisfaire au format.');
        }
        return redirect()->route('projets.index')->with('success', __('PkgProjets::projet.singular') . ' ' . __('Core::app.addSucées'));
    }
}
