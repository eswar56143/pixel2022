@extends('layouts.app')

@section('content')
    <div class="container con overflow-x-scroll">
        <div class="select-content">
            <label for="select" class="m-1">
                <strong>Select users: </strong>
            </label>
            <select name="select" id="select-table" class="m-1">
                <option value="" style="color: #333;">Choose Your Table</option>
                <option value="users" style="color: #333;">Registered users</option>
                <option value="code-combat" style="color: #333;"> Code Combat </option>
                <option value="debugging" style="color: #333;">Debugging</option>
                <option value="gaming" style="color: #333;">Gaming</option>
                <option value="hackathon" style="color: #333;">Hackathon</option>
                <option value="meme-gram" style="color: #333;">Meme Gram</option>
                <option value="paper-presentation" style="color: #333;">Paper Presentation</option>
                <option value="natyakshetra" style="color: #333;">Natyakshetra</option>
                <option value="quiz" style="color: #333;">Quiz</option>
            </select>
            <button class=" btn btn-primary m-1" onclick="select_table()">Submit</button>
        </div>
        <div class="table" id="table">

       </div>
    </div>
    <script>
        function select_table() {
            let d = document.getElementById("select-table");
            let item = d.options[d.selectedIndex].value;
            $.ajax({
                type: 'POST',
                url: '/requestTable',
                datatype: 'json',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'table': item,
                },
                success: function(result) {
                    $('#table').html(result);
                }
            });
        }
    </script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script>

        function ExportToExcel(type, name)
        {
            let data = document.getElementById('table1');

            let file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

            XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

            XLSX.writeFile(file, name +'.' + type);
        }
        function ExportTeams(type, name)
        {
            let data = document.getElementById('table2');

            let file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

            XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

            XLSX.writeFile(file, name +'.' + type);
        }
    </script>
@endsection


