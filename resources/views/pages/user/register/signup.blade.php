@extends('template.app')

@section('title', 'Register Agent')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@section('content')
    <main>
        <h1 class="titleN">Seja bem vindo ao nosso projeto!</h1>
        <h2>Esperamos que possa receber todo o aporte necessário.</h2>

        <form action="" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="noOrg">Nome da Organização</label>
                    <input type="text" id="noOrg" placeholder="Nome da organização" required>
                </div>
                <div class="form-group">
                    <label for="raSoc">Razão Social</label>
                    <input type="text" id="raSoc" placeholder="Razão Social" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="noRep">Nome do Responsável</label>
                    <input type="text" id="noRep" required>
                </div>

                <div class="form-group">
                    <label for="idEmail">Email</label>
                    <input type="email" id="idEmail" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="idSenha">Senha</label>
                    <input type="password" id="idSenha" required>
                </div>

                <div class="form-group">
                    <label for="idSenha2">Confirmar senha</label>
                    <input type="password" id="idSenha2" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="idCnpj">CNPJ</label>
                    <input type="text" id="idCnpj" required>
                </div>

                <div class="form-group">
                    <label for="idData">Data de Fundação</label>
                    <input type="date" id="idData" required>
                </div>

                <div class="form-group">
                    <label for="idTel">Telefone</label>
                    <input type="tel" id="idTel">
                </div>
            </div>            

            <div class="form-row">
                <div class="form-group">
                    <label for="idCep">CEP</label>
                    <input type="text" id="idCid">
                </div>

                <div class="form-group">
                    <label for="idEnd">Endereço</label>
                    <input type="text" id="idEnd">
                </div>
            </div>            

            <div class="form-row">
                <div class="form-group">
                    <label for="idCid">Cidade</label>
                    <input type="text" id="idCid">
                </div>                
                <div class="form-group">
                    <label for="idBar">Bairro</label>
                    <input type="text" id="idBar">
                </div>                             

                <div class="form-group">
                    <label for="id">UF</label>
                    <select name="uf" id="idUf">
                        <option value="23">BBB</option>
                        <option value="54r">CCC</option>
                        <option value="54r">DDD</option>

                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="idC">Causa Social</label>
                    <select name="causa" id="idC">
                        <option value="a">fadsfas</option>
                        <option value="as">fadsfas</option>
                        <option value="d">fadsfas</option>
                        <option value="g">fadsfas</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row all-size">
                <div class="form-group">
                    <label for="idDesc">Descrição das Atividades</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="form-row all-size">
                <button type="submit">Cadastrar ONG</button>
            </div>
        </form>
    </main>
@endsection