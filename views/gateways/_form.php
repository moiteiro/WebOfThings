<form action="<?php echo WEBSITE.DS.$route['controller'].DS.'create' ;?>" 
        	  id="form-create-user" 
              class="block-content form" 
              enctype="multipart/form-data" 
              method="post"
>     
    <Fieldset>
    	<legend>Adicionar Gateway</legend>

    	<label for="url">URL</label>
    	<input type="text" name='url' id='url' value="<?php if($repopulate) echo $params['url'] ?>"/>
    	<input type="submit" value='cadastrar' />
    </Fieldset> 
</form>