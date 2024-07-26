<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="post" role="form">
    <legend>Form Title</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome: ">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email: ">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite assunto: ">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Digite sua mensagem: "></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>