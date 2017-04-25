<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Task;
use AppBundle\Entity\shops1;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use FOS\ElasticaBundle\Configuration\Search;
use Symfony\Component\Finder\Finder;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {

        $search = new Request();
        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('shopName',TextType::class, array('label' => 'Zoeken'))
            
            ->add('search', SubmitType::class, array('label' => 'Zoeken'))
            ->getform();
        $form->handleRequest($request);
        $search = $form->getData();
        //$dump = print_r($search);
        $searchString = implode(',', $search);
        $dump = var_dump($searchString);
        $finder = $this->container->get('fos_elastica.index.app');
        $shops = $finder->search($searchString);
        return $this->render('default/test.html.twig', array(
            'shops' => $shops,
            'form' => $form->createView(),
            //'search' => $dump,
        ));
    }

    /**
     * @Route("/new", name="task_succes")
     */
    public function newAction(Request $request)
    {
        $task = new Task();

        $form = $this->createFormBuilder($task)
            ->add('Task', SearchType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('task_succes');
    }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/newer", name="newer")
     */
    public function newerAction(Request $request)
    {
      $query = '';
        
        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('finder', SearchType::class)
            ->add('search', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $finder = $this->container->get('fos_elastica.index.app');
            $shops = $finder->search('fietsen');

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            
    }

        return $this->render('default/newer.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/newSearch", name="new")
     */
    public function newSearchAction(Request $request)
    {
        $search = new shops1();

        $form = $this->createFormBuilder($search)
            ->setMethod('GET')
            ->add('shopName', SearchType::class)
            ->add('get', SubmitType::class, array('label' => 'Zoeken'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $search = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            //$em = $this->getDoctrine()->getManager();
            //$em->persist($search);
            //$em->flush();
        
            }
        //$finder = $this->container->get('fos_elastica.index.app');
        //$shops = $finder->search($search);

    //return $this->redirectToRoute('newAction');

        return $this->render('default/newSearch.html.twig', array(
            //'shops' => $shops,
            'form' => $form->createView(),
        ));
    }
    
}
