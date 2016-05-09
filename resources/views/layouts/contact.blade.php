<div class="row" >
    <div class="col m12">
        <div class="card-panel teal lighten-2">
            <h5 style="color:white;">Nous contacter concernant ce véhicule</h5>
        </div>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="chip red darken-1" style="color:white;">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @if (session()->has('success'))
        <script type="text/javascript">
            setTimeout(function() {
                var $success = $('<span >Votre message a bien été envoyé!</span>');
                Materialize.toast($success, 6000, 'success-class');
            }, 1000);
        </script>
        @endif
        @if (session()->has('error'))
            <script type="text/javascript">
                setTimeout(function() {
                    var $error = $('<span >Erreur, votre message n\'a pas été envoyé!</span>');
                    Materialize.toast($error, 6000, 'error-class');
                }, 1000);
            </script>
        @endif
        <?php echo Form::open(array('action' => 'MailsController@sendCarMail', 'method' => 'post')); ?>
        {{ csrf_field() }}
        <div class="col m6">
            <?php echo Form::text('first_name'); ?>
            <?php echo Form::label('first_name', 'Prenom'); ?>
        </div>
        <div class="col m6">
            <?php echo Form::text('last_name'); ?>
            <?php echo Form::label('last_name', 'Nom de famille'); ?>
        </div>
        <div class="col m6">
            <?php echo Form::text('phone_number'); ?>
            <?php echo Form::label('phone_number', 'Numéro de téléphone'); ?>
        </div>
        <div class="col m6">
            <?php echo Form::text('email'); ?>
            <?php echo Form::label('email', 'Email'); ?>
        </div>
        <div class="col m6">
            <?php echo Form::textarea('message'); ?>
            <?php echo Form::label('message', 'Message'); ?>
        </div>
            <?php echo Form::hidden('car_id', $datas['id']); ?>
            <?php echo Form::hidden('provider', $provider); ?>
            <?php echo Form::hidden('slug', str_slug($datas['marque'].'-'.$datas['modele'].'-'.$datas['edition'], '-')); ?>
        <div class="col m12">
            <?php echo Form::submit('Envoyer la demande', array('class' => 'waves-effect waves-light btn button-contact')); ?>
        </div>

    <?php echo Form::close(); ?>
    </div>
</div>
