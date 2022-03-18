<div class="users form">
	<?= $this->Flash->render() ?>
	<h3>Proporcione un Token Unico</h3>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><? = __(singular: 'Proporcione el token generado en su telefono movil') ?> </legend>
		<div style="text-align: center">
			<img src="<?= 'data:image/png;base64,'.$imagQr ?>" alt="Imagen QR para escanear">
		</div>
		<?= $this->Form->control('token',['required' => true, 'placeholder' => 'Digite el numero proporcionado por su App Authenticator']) ?>
	</fieldset>
	<?= $this->Form->submit(__('Verificar')); ?>
	<?= $this->Form->end() ?>


</div>
