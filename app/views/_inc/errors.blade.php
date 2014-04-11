@if($errors->any())
<p class="alert alert-danger">
    {{implode('', $errors->all(':message<br>'))}}
</p>
@endif