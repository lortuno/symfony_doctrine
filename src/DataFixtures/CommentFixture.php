<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixture extends BaseFixture {
	private static $articleComments = [
		'This blog sucks',
		'Why are we writing here¡',
		'Whats the purpose of life',
		'Titan might have life',
		'I am gonna miss Sheldon',
		'Go go power rangers',
	];

	protected function loadData(ObjectManager $manager) {
		$randomComments = rand(1, 50);

		$this->createMany(
			Comment::class,
			$randomComments,
			function (Comment $comment) {

				$comment->setContent($this->faker->boolean ? $this->faker->paragraph : $this->faker->randomElement(self::$articleComments));
				$comment->setAuthorName($this->faker->name);
				$comment->setCreatedAt($this->faker->dateTimeBetween('-1 months', '-1 seconds'));
				$comment->setArticle($this->getReference(Article::class . '_'.$this->faker->numberBetween(0, 9)));
			}
		);

		$manager->flush();
	}
}
