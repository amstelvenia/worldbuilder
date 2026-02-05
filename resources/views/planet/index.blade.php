<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
  <div class="home-container">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Planets
      </h2>
      <div class="table-responsive table">
        <table border='1'>
            <thead class="header">
                <tr>
                  <th>Name</th>
                  <th>Mass</th>
                  <th>Radius</th>
                  <th>Atm Pressure</th>
                  <th>Day Length</th>
                  <th>Distance</th>
                  <th>Description</th>
                  <th>Total Moon Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planet as $planets)
                    <td>{{ $planets->name }}</td>
                    <td>{{ $planets->mass }}</td>
                    <td>{{ $planets->vol_radius }}</td>
                    <td>{{ $planets->atm_pressure }}</td>
                    <td>{{ $planets->sid_rotation }}</td>
                    <td>{{ $planets->distance }}</td>
                    <td>{{ $planets->description }}</td>
                    <td>{{ $planets->total_moon_count }}</td>
                @endforeach
            </tbody>
        </table>
        </div>
  </div>
</body>
</html>