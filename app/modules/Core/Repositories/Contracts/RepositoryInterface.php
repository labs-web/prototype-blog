<?php


namespace Modules\Core\Repositories\Contracts;

interface RepositoryInterface {

    public function paginate();

    public function find(int $id, array $columns = ['*']);

    public function create(array $data);

    public function update($id, array $data);
    
    public function destroy($id);

}