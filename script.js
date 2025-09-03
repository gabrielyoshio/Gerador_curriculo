$(document).ready(function() {
    // Adicionar experiências dinamicamente
    $("#addExp").click(function() {
        $("#experiencias").append(`
            <div class="mb-3">
                <input type="text" name="experiencias[]" class="form-control" placeholder="Digite uma experiência">
            </div>
        `);
    });
});
