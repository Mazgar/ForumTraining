<?php

namespace TopicBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TopicBundle\Entity\Topic;

class loadTopicData implements FixtureInterface
{

  public function load(ObjectManager $manager)
  {
    $topic = new Topic();
    $topic->setSubject("Informations à tous");
    $topic->setDate(new \Datetime());
    $topic->setAuthor('Mecklips');
    $topic->setCategory('Forum');
    $topic->setText('Je vous informe que le forum est désormais ouvert à toutes et à tous, ceci est juste un petit test voir si les fixtures fonctionnent');
    $manager->persist($topic);

    $topic2 = new Topic();
    $topic2->setSubject("Je suis nouveau");
    $topic2->setDate(new \Datetime());
    $topic2->setAuthor('Alan');
    $topic2->setCategory('Présentation');
    $topic2->setText('Je découvre le forum et j\'aimerai apprendre un tas de trucs sur rpg maker mv');
    $manager->persist($topic2);

    $topic4 = new Topic();
    $topic4->setSubject("et un de plus");
    $topic4->setDate(new \Datetime());
    $topic4->setAuthor('Tosh');
    $topic4->setCategory('Présentation');
    $topic4->setText('Je découvre le forum et j\'aimerai apprendre un tas de trucs sur rpg maker mv');
    $manager->persist($topic4);


    $topic3 = new Topic();
    $topic3->setSubject("Making de village");
    $topic3->setDate(new \Datetime());
    $topic3->setAuthor('Théa');
    $topic3->setCategory('Making');
    $topic3->setText('Je rencontre des difficultés pour créer mon village sous rpg maker mv');
    $manager->persist($topic3);
    $manager->flush();
  }

}
