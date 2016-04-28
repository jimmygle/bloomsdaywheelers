function addRaceHistoryRow(rowNumber) {

    // Setup row
    var tableRow = $('<tr></tr>');
    tableRow.append('<th width="5%" class="text-center">' + (rowNumber + 1) + '</th>');

    // Year selector dropdown
    var yearSelector = $('<select name="raceYear[' + rowNumber + ']" class="form-control"></select>');
    var currentYear = new Date().getFullYear();
    for (var i=currentYear; i>(currentYear-6); i--) {
        yearSelector.append('<option value="' + i + '">' + i + '</option>');
    }
    tableRow.append($('<td width="10%"></td>').append(yearSelector));

    // Race name
    var raceName = $('<input type="text" name="raceName[' + rowNumber + ']" class="form-control" />');
    tableRow.append($('<td width="55%"></td>').append(raceName));

    // Race distance
    var raceDistance = $('<input type="text" name="raceDistance[' + rowNumber + ']" class="form-control" />');
    tableRow.append($('<td width="10%"></td>').append(raceDistance));

    // Race time
    var raceTime = $('<input type="text" name="raceTime[' + rowNumber + ']" class="form-control" />');
    tableRow.append($('<td width="10%"></td>').append(raceTime));

    // Race position
    var racePosition = $('<input type="text" name="racePosition[' + rowNumber + ']" class="form-control" />');
    tableRow.append($('<td width="10%"></td>').append(racePosition));

    $('#race_history > tbody:last-child').append(tableRow);
}

var raceResultsRowNumber = 0;
while (raceResultsRowNumber < 3) {
    addRaceHistoryRow(raceResultsRowNumber);
    raceResultsRowNumber++;
}

$('#race_history_add').click(function(e){
    e.preventDefault();
    addRaceHistoryRow(raceResultsRowNumber);
    raceResultsRowNumber++;
});
