function addSemester() {
    const table = document.getElementById('notasTable');
    const headerRow1 = document.getElementById('headerRow1');
    const headerRow2 = document.getElementById('headerRow2');
    const rows = table.rows;

    // Número do novo semestre
    const newSemesterNumber = 4;

    // Adicionar novas células ao cabeçalho
    const newHeader1 = headerRow1.insertCell(headerRow1.cells.length);
    newHeader1.colSpan = 3;
    newHeader1.innerText = `Semestre ${newSemesterNumber}`;

    const newHeader2_1 = headerRow2.insertCell(headerRow2.cells.length);
    newHeader2_1.innerText = 'Nota 1';

    const newHeader2_2 = headerRow2.insertCell(headerRow2.cells.length);
    newHeader2_2.innerText = 'Nota 2';

    const newHeader2_3 = headerRow2.insertCell(headerRow2.cells.length);
    newHeader2_3.innerText = 'Nota 3';

    // Adicionar células vazias para cada linha de aluno
    for (let i = 2; i < rows.length; i++) {
        const newCell1 = rows[i].insertCell(rows[i].cells.length);
        newCell1.innerHTML = '';

        const newCell2 = rows[i].insertCell(rows[i].cells.length);
        newCell2.innerHTML = '';

        const newCell3 = rows[i].insertCell(rows[i].cells.length);
        newCell3.innerHTML = '';
    }
}

function addStudent() {
    const table = document.getElementById('notasTable');
    const rowCount = table.rows.length;
    const cellCount = table.rows[0].cells.length;

    // Criar uma nova linha para o aluno
    const newRow = table.insertRow(rowCount);
    
    const cellAluno = newRow.insertCell(0);
    cellAluno.innerHTML = `Aluno ${rowCount - 1}`; // Nome do aluno (pode ser personalizado)

    // Adicionar células vazias para as notas do novo aluno
    for (let i = 1; i < cellCount; i++) {
        const newCell = newRow.insertCell(i);
        newCell.innerHTML = '';
    }
}
