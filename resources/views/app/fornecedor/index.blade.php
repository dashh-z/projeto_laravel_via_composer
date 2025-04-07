<h3>fornecedor</h3>

@php
    
@endphp

@isset($fornecedores)
Fornecedor: {{ $fornecedores [0] ['nome'] }}
<br>
Status: {{ $fornecedores [0] ['status'] }}
<br>
CNPJ: {{ $fornecedores [0] ['cnpj'] }}
@endisset
