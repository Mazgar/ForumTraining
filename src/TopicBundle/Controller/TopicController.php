<?php

namespace TopicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class TopicController extends Controller
{

  public function presentationAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicPresentation = $em->getRepository('TopicBundle:Topic')
    ->findby(array('category' => 'Présentation'));

      return $this->render('forum/presentation.html.twig',
      [ 'topicPresentation' => $topicPresentation ]);
  }

  public function presentationIdAction($id = null)
  {
    $em = $this->getDoctrine()->getManager();
    $idPresentation = $em->getRepository('TopicBundle:Topic')
    ->find($id);

    return $this->render('forum/presentationID.html.twig',
    [ 'idPresentation' => $idPresentation ]);
  }

  public function rulesAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicRules = $em->getRepository('TopicBundle:Topic')
    ->findby(array('category' => 'Règles'));

    return $this->render('forum/rules.html.twig',
    ['topicRules' => $topicRules]);
  }

  public function rulesIDAction($id = null)
  {
    $em = $this->getDoctrine()->getManager();
    $idRules = $em->getRepository('TopicBundle:Topic')->find($id);

    return $this->render('forum/rulesID.html.twig',
    ['idRules' => $idRules]);
  }

  public function newsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicNews = $em->getRepository('TopicBundle:Topic')->findby(array('category' => 'News'));
    return $this->render('forum/news.html.twig',
    [
      'topicNews' => $topicNews
    ]);
  }

    public function newsIDAction($id = null)
    {
      $em = $this->getDoctrine()->getManager();
      $idNews = $em->getRepository('TopicBundle:Topic')->find($id);

      return $this->render('forum/newsID.html.twig', [
        'idNews' => $idNews
      ]);

  }

  public function tutoAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicTuto = $em->getRepository('TopicBundle:Topic')->findby(array('category' => 'Tutoriels'));
    return $this->render('forum/tuto.html.twig',
    [
      'topicTuto' => $topicTuto
    ]);
  }

    public function tutoIDAction($id = null)
    {
      $em = $this->getDoctrine()->getManager();
      $idTuto = $em->getRepository('TopicBundle:Topic')->find($id);

      return $this->render('forum/tutoID.html.twig', [
        'idTuto' => $idTuto
      ]);

  }

  public function resourcesAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicRes = $em->getRepository('TopicBundle:Topic')->findby(array('category' => 'Resources'));
    return $this->render('forum/resources.html.twig',
    [
      'topicRes' => $topicRes
    ]);
  }

    public function resourcesIDAction($id = null)
    {
      $em = $this->getDoctrine()->getManager();
      $idTuto = $em->getRepository('TopicBundle:Topic')->find($id);

      return $this->render('forum/resourcesID.html.twig', [
        'idRes' => $idRes
      ]);

  }

  public function sharingAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $topicShare = $em->getRepository('TopicBundle:Topic')->findby(array('category' => 'Entraide'));
    return $this->render('forum/sharing.html.twig',
    [
      'topicShare' => $topicShare
    ]);
  }

    public function sharingIDAction($id = null)
    {
      $em = $this->getDoctrine()->getManager();
      $idShare = $em->getRepository('TopicBundle:Topic')->find($id);

      return $this->render('forum/sharingID.html.twig', [
        'idShare' => $idShare
      ]);

  }

}
