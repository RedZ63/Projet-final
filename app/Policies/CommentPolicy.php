<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    /**
     * Déterminer si l'utilisateur peut visualiser des modèles.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Déterminer si l'utilisateur peut visualiser le modèle.
     */
    public function view(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * Déterminer si l'utilisateur peut créer des modèles.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Déterminer si l'utilisateur peut mettre à jour le modèle.
     */
    public function update(User $user,Comment $comment): boolùm
    {
        return $comment->user()->is($user);

    }

    /**
     * Déterminer si l'utilisateur peut supprimer le modèle.
     */
    public function delete(User $user ,Comment $comment): bool
    {
        return $this->update($user, $comment);
    }

    /**
     * Déterminer si l'utilisateur peut restaurer le modèle.
     */
    public function restore(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * Déterminer si l'utilisateur peut supprimer définitivement le modèle.
     */
    public function forceDelete(User $user, Comment $comment): bool
    {
        //
    }
}