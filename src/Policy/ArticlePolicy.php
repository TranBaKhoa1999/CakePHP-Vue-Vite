<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Article;
use Authorization\IdentityInterface;

/**
 * Article policy
 */
class ArticlePolicy
{
    /**
     * Check if $user can create Article
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Article $article
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Article $article)
    {
        return true;
    }

    /**
     * Check if $user can update Article
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Article $article
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Article $article)
    {        
        return $this->isAuthor($user, $article);
    }

    /**
     * Check if $user can delete Article
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Article $article
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Article $article)
    {
        return $this->isAuthor($user, $article);
    }

    /**
     * Check if $user can view Article
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Article $article
     * @return bool
     */
    public function canView(IdentityInterface $user, Article $article)
    {
    }

    protected function isAuthor(IdentityInterface $user, Article $article)
    {
        return true;
        return $article->user_id === $user->id;
    }

}
