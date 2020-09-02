<?php require_once 'reqHeader.php' ?>

<?php require_once 'reqMenu.php' ?>

<div class="container containerMargin">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s4"><a href="#postagens">Postagens</a></li>
                <li class="tab col s4"><a href="#usuarios">Usuários</a></li>
                <li class="tab col s4"><a href="#jornalistas">Jornalistas</a></li>
            </ul>
        </div>
    </div>
    <div class="row">

        <div id="postagens" class="col s12">
            <div class="card-panel center">
                <h3>O blog não possui nenhuma postagem</h3>
            </div>

            <div class="card horizontal cardPostagem">
                <div class="card-image">
                    <img src="assets/run2.jpg" height="400px" width="300px">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h4>este é um titulo bem grande de teste</h4>
                        <h5>Subtitulo</h5>
                    </div>
                </div>
            </div>
        </div>

        <div id="usuarios" class="col s12">
            <table class="centered striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Comentário</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Lorem </td>
                        <td class="right-align">
                            <a href="" class="btn-flat btnDefaultDark"><i class="material-icons">check</i></a>
                            <a href="" class="btn-flat btnDefaultDark"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="jornalistas" class="col s12">
            <table class="centered striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Comentário</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Lorem </td>
                        <td class="right-align">
                            <a href="" class="btn-flat btnDefaultDark"><i class="material-icons">check</i></a>
                            <a href="" class="btn-flat btnDefaultDark"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'reqFAB.php' ?>

<?php require_once 'reqFooter.php' ?>

<?php require_once 'reqScript.php' ?>