<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <script src="assets/jquery.js"></script>
    <link href="assets/bootstrap.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <title>Agenda Fácil - Home</title>
</head>
<body>

    <?php require_once 'menu.php'?>

    <header class="bg-light text-center py-5">
        <div class="container">
            <h1>Bem-vindo ao Agenda Fácil</h1>
            <p class="lead">Gerencie seus compromissos de forma rápida e eficiente.</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <div class="card-body">
                        <h5 class="card-title"><span>📅</span>Agendamentos Simples</h5>
                        <p class="card-text">Marque compromissos em poucos cliques de forma intuitiva</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <div class="card-body">
                        <h5 class="card-title"><span>💌</span>Notificações via Email</h5>
                        <p class="card-text">Receba alertas para nunca mais perder um compromisso</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <div class="card-body">
                        <h5 class="card-title"><span>📊</span>Ganhos de Produtividade</h5>
                        <p class="card-text">Aumente sua eficiência e otimize seu tempo com o Agenda Fácil</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="container my-5">
        <h2 class="text-center mb-4">Agende seu Compromisso</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="form_agendamento">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="empresa" class="form-label"><span class="text-danger">*</span> Empresa</label>
                            <select class="form-select" name="empresa">
                                <option value="">Selecione</option>
                                <option value="Ribeiro's Barbearia">Ribeiro's Barbearia</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="nome" class="form-label"><span class="text-danger">*</span> Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label"><span class="text-danger">*</span> E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <label for="nome" class="form-label"><span class="text-danger">*</span> Telefone</label>
                            <input type="tel" name="telefone" class="form-control" placeholder="Telefone">
                        </div>
                        <div class="col-md-12">
                            <label for="data" class="form-label"><span class="text-danger">*</span> Data</label>
                            <input type="datetime-local" class="form-control" name="data" min="<?= date('Y-m-d\TH:i')?>">
                        </div>
                    </div>
                    <button class="btn btn-success w-100 mt-3">Agendar</button>
                </form>
            </div>
        </div>
    </section>
    
    <?php require_once 'footer.php'?>
</body>
</html>
