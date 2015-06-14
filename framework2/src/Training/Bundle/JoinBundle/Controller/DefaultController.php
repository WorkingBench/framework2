<?php

namespace Training\Bundle\JoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Training\Bundle\JoinBundle\Entity\MailList;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
		$mailList = new MailList();
		$em = $this->getDoctrine()->getManager();
	    $em->persist($mailList);
	    
		$form = $this->createFormBuilder($mailList)
			->add('first_name', 'text')
			->add('last_name', 'text')
			->add('email', 'email')
			->add('address', 'text')
			->add('state_code', 'text')
			->add('zip_postal', 'text')
			->add('username', 'text')
			->add('password', 'text')
			->add('bio', 'textarea')
			->add('interests', 'choice', array(
			'choices' => array(
				'Backpack Cal',
				'California Calm',
				'California Hotsprings',
				'Cycle California',
				'From Desert to Sea',
				'Kids California',
				'Nature Watch',
				'Snowboard Cali',
				'Taste of California',
			),
			'multiple' => true,
			'expanded' => true
		))
			->add('num_tours', 'choice', array(
			'choices' => array(
				'none' => 'none',
				'1-3' => '1 - 3',
				'4-6' => '4 - 6',
				'7+' => '7+'
			),
			'expanded' => true,
			'multiple' => false
		))
			->getForm();
			
		if ($request->getMethod() == 'POST') {
	        $form->bindRequest($request);

	        if ($form->isValid()) {
	            // perform some action, such as saving the task to the database
			    $em->flush();
				
	            return $this->redirect($this->generateUrl('task_success'));
	      }
		}	
		return $this->render('TrainingJoinBundle:Default:index.html.twig', array(
				            'form' => $form->createView()));
    }
}
