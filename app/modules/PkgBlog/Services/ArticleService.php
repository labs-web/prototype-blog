<?php
// Ce fichier est maintenu par ESSARRAJ Fouad



namespace Modules\PkgBlog\Services;

use Modules\PkgBlog\Models\Article;
use Modules\Core\Services\BaseService;

/**
 * Classe ArticleService pour gérer la persistance de l'entité Article.
 */
class ArticleService extends BaseService
{
    /**
     * Les champs de recherche disponibles pour articles.
     *
     * @var array
     */
    protected $fieldsSearchable = [
        'title',
        'slug',
        'content',
        'category_id',
        'user_id'
    ];

    /**
     * Renvoie les champs de recherche disponibles.
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldsSearchable;
    }

    /**
     * Constructeur de la classe ArticleService.
     */
    public function __construct()
    {
        parent::__construct(new Article());
    }

    /**
     * Crée une nouvelle instance de article.
     *
     * @param array $data Données pour la création.
     * @return mixed
     */
    public function create(array $data)
    {
        return parent::create($data);
    }
}
