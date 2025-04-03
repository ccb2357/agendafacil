<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <script src="assets/jquery.js"></script>
    <link href="assets/bootstrap.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <title>Agenda Fácil - Contato</title>
</head>
<body>
    
    <?php require_once 'menu.php'?>

    <section class="container my-5">
        <div class="text-center mb-4">
            <h1>Fale Conosco</h1>
            <p class="lead">Gostou do que viu e quer saber mais sobre o Agenda Fácil? Estamos aqui para ajudar! Preencha o formulário ao lado com seus dados, e nossa equipe entrará em contato para fornecer mais informações sobre como o sistema pode otimizar sua rotina. Não perca a chance de transformar a maneira como você gerencia seus compromissos e tarefas de forma simples, prática e rápida. Entre em contato e descubra como podemos te ajudar!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 m-4 p-4">
                <form id="form_contato">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="empresa" class="form-label"><span class="text-danger">*</span> Ramo</label>
                            <select class="form-select" name="ramo">
                                <option value="">Selecione</option>
                                <option value="Barbearia">Barbearia</option>
                                <option value="Spa">Spa</option>
                                <option value="Mecânica">Mecânica</option>
                                <option value="Personal Trainer">Personal Trainer</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="nome" class="form-label"><span class="text-danger">*</span> Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label"><span class="text-danger">*</span> E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="col-md-12">
                            <label for="nome" class="form-label"><span class="text-danger">*</span> Telefone</label>
                            <input type="tel" name="telefone" class="form-control" placeholder="Telefone">
                        </div>
                        <div class="col-12">
                            <label for="mensagem" class="form-label"><span class="text-danger">*</span> Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="4" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </section>

    <?php require_once 'footer.php'?>
</body>
</html>
