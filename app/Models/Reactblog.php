<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// POUR SWAGGER
/**
 * Class Reactblog
 *
 * @package none
 *
 * @author  jeromeB <contact@jeromeb.org>
 *
 * @OA\Schema(
 *     title="Reactblog",
 *     @OA\Xml(
 *         name="Reactblog"
 *     )
 * )
 */
class Reactblog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'author'
    ];

    // POUR SWAGGER

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *     title="Reactblog title",
     *     description="Reactblog title"
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     title="Reactblog description",
     *     description="Reactblog description"
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     title="Reactblog author",
     *     description="Reactblog author"
     * )
     *
     * @var string
     */
    private $author;
}
