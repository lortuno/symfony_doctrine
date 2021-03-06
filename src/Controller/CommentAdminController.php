<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommentAdminController extends AbstractController
{
    /**
     * @Route("/admin/comment", name="comment_admin")
     */
    public function index(CommentRepository $commentRepository, Request $request, PaginatorInterface $paginator)
    {
	    $q = $request->query->get('q');
	    $commentsQuery = $commentRepository->getSearchQueryBuilder($q);

	    $pagination = $paginator->paginate(
		    $commentsQuery, /* query NOT result */
		    $request->query->getInt('page', 1)/*page number*/,
		    10/*limit per page*/
	    );
	    return $this->render('comment_admin/index.html.twig', [
		    'pagination' => $pagination,
	    ]);
    }
}
