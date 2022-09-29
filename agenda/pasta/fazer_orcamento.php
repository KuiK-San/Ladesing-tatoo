<div class="container">
    <form action="cadastros/orc.php" method="post" enctype="multipart/form-data">
        <h3 class="center-align">Fazer um orçamento</h3>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" data-length="350" name="mensagem" class="materialize-textarea"></textarea>
                <label for="textarea1">Mensagem</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="arquivo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
            <button class="btn waves-effect waves-light" type="submit" >Enviar </button>

    </form>
</div>
    <script>
        M.AutoInit();
        $(document).ready(function() {
            $('input#input_text, textarea#textarea1').characterCounter();
        });
    </script>
