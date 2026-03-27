<form method='post' action='/salvar'>
{{ csrf_field() }}

    Nome:
    <input type="text" name="nome"><br>
    Celular:
    <input type="text" name="cel"><br>
    <input type="submit" name="enviar">
</form>
