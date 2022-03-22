<?php
namespace App\Controller;
use PragmaRX\Google2FA\Google2FA;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class VerificationController extends AppController
{
	private $userData;
	public function initialize(): void 

	{
		parent::initialize();
		if ($this->Authentication->getResult()->isValid()) {
			$this->userData = $this->Authentication->getIdentity()->getOriginalData();

		}
	}

	public function index()
	{
		$google2Fa = new Google2FA();
		$company = array("BitcloudGroup");
		$qrUrl = $google2Fa->getQRCodeUrl(
			$company[0],
			$this->userData->getEmail(),
			$this->userData->getSecret()
		);

		$writer = new Writer(
			new ImageRenderer(
				new RendererStyle(200),
				new ImagickImageBackEnd()
			)
		);

		$imagQr = base64_encode($writer->writeString($qrUrl));

		if ($this->request->is('post')){
			$validToken = $google2Fa->verifyKey(
				$this->userData->getSecret(),
				$this->request->getData('token')
			);

			if ($validToken){
				$this->request->getSession()->delete('2fa_needed');
				return $this->redirect(['controller'=> 'Movimientoencabezados', 'action'=>'index']);
			}

			$this->Flash->error('Codigo ingresado es incorrecto, pruebe otra vez.');
		
		}

		$this->set(compact( 'imagQr'));
	}
}
