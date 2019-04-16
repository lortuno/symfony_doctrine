<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Services\MarkdownHelper;
use App\Services\SlackClient;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;

class ArticleController extends AbstractController {
	/**
	 * Currently unused: just showing a controller with a constructor!
	 */
	private $isDebug;

	public function __construct(bool $isDebug) {
		$this->isDebug = $isDebug;
	}

	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage(ArticleRepository $repository) {
		$articles = $repository->findAllPublishedOrderedByNewest();

		return $this->render(
			'article/homepage.html.twig',
			[
				'articles' => $articles,
			]
		);
	}

	/**
	 * @Route("/news/{slug}", name="article_show")
	 */
	public function show(Article $article, SlackClient $slack) {
		if ($article->getSlug() === 'khaaaaaan') {
			$slack->sendMessage('Kahn', 'Ah, Kirk, my old friend...');
		}

		return $this->render(
			'article/show.html.twig',
			[
				'article' => $article,
				'monty' => $this->getMontyHallTheory(),
			]
		);
	}

	/**
	 * Demuestra la teoría de Monty Hall.
	 *
	 * @return string
	 */
	private function getMontyHallTheory() {
		$change = 0;
		$arr = array(1, 2, 3);
		$firstChoice = 3;
		for ($i = 0; $i < 3000; $i++) {
			$sortArr = rand(0, 2);
			$prize = $arr[$sortArr];

			if ($firstChoice !== $prize) {
				$change++;
			}
		}
		return 'Total cambio: ' . $change . ' de ' . $i;
	}

	/**
	 * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
	 */
	public function toggleArticleHeart(Article $article, LoggerInterface $logger, EntityManagerInterface $em) {
		$article->incrementHeartCount();
		$em->flush();

		$logger->info('Article is being hearted!');
	}
}
