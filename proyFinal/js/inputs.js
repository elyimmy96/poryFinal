function changeLabel(number) {
    let fileInput = $(`#file${number}`);
    let label = $(`#label${number}`);
    let fileName = fileInput.val().split( '\\' ).pop();
    console.log(label.html(fileName));
}
function addInput(divName) {
    let div = $("#"+divName);
    let count = $("div[data-counterHelp='true']").length + 1;
    let code = `<div class="row" data-counterHelp="true">
                    <div class="col-4">
                        <select name="tipoArchivo${count}" placeholder="Tipo de Archivo">
                            <option value="justificacion">Carta Justificación</option>
                            <option value="solicitud">Solicitud de Indulto</option>
                            <option value="evidencia">Evidencia</option>
                        </select>
                    </div>
                    <div class="col-8 viewBtn">
                        <div class="row">
                            <input onchange="changeLabel(${count})" type="file" name="fileName${count}" class="fileBtn" id="file${count}"/>
                            <label for="file${count}">Seleccionar</label>
                            <div class="tableTitle hid">
                                <p id="label${count}">Ningún archivo seleccionado</p>
                            </div>
                        </div>
                    </div>
                </div>`;
    div.append(code);
}
