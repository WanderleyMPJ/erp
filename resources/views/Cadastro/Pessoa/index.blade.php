@extends('layouts._menu')
@section('menutop')
<div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ route('pessoa') }}" class="current">Pessoa</a> </div>


</div>
@endsection

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Listagem Pessoas</h5>
    </div>


    <table class="table table-bordered data-table">
        <thead>
            <tr>
        <div class="widget-content nopadding">
            <div class="widget-title"> <span class="icon">
                    <input type="checkbox" id="title-checkbox" name="title-checkbox" />
                </span>
                <h5>Static table with checkboxes</h5>
            </div>  
            <th><i class="icon-resize-vertical"></i></th>
            <th>Nome</th>
            <th>CNPJ ou CPF</th>
            <th>RG ou Insc Estadual</th>
            <th>Ativo</th>
            </tr>
            </thead>
            <tbody>
                @forelse($pessoas as $pessoa)
            
            <tr class="gradeX">
                <td><input type="checkbox" /></td>  
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->cnpj_cpf}}</td>
                <td>{{$pessoa->rg_inscest}}</td>
                <td><input type="checkbox" />{{$pessoa->ativo}}</td>
                

            </tr>
            @empty
            <p>Nenhuma Pessoa Encontrada...</p>
            @endforelse
            </tbody>
    </table>
</div>
</div>
@endsection