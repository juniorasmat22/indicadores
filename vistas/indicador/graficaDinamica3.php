<div class="row">
    <div class="custom-box">
      <div class="servicetitle">
        <h4>Gráfico de barras</h4>
        <hr>
      </div>
          <figure class="demo-xchart" id="chart3"></figure>
    </div>
  </div>
<script>
<?php
  if ($fuente_huamachuco->respuesta) {
    $filas_h=$fuente_huamachuco->resultado;
    ?>
    (function() {
                var data = [{
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l2",
                "data": [
                  <?php
                    foreach ($filas_h as $fila) {?>

                  {
                  "y": <?php echo $fila->resultado; ?>,
                  "x": "<?php echo $fila->periodo; ?>-11-19T00:00:00"
                },
                  <?php } ?>
                ]
              }],
              "type": "line-dotted",
              "yScale": "linear"
            }, {
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l2",
                "data": [

                  <?php
                    foreach ($filas_h as $fila) {?>
                      {
                      "y": <?php echo $fila->resultado; ?>,
                      "x": "<?php echo $fila->periodo; ?>-11-20T00:00:00"
                    },
                  <?php } ?>
                ]
              }],
              "type": "cumulative",
              "yScale": "linear"
            }, {
              "xScale": "ordinal",
              "comp": [],
              "main": [{
                "className": ".main.l2",
                "data": [

                  <?php
                    foreach ($filas_h as $fila) {?>
                      {
                      "y": <?php echo $fila->resultado; ?>,
                      "x": "<?php echo $fila->periodo; ?>-11-19T00:00:00"
                    },
                  <?php } ?>
                ]
              }],
              "type": "bar",
              "yScale": "linear"
            }];
            var order = [0, 2, 0, 2],
              i = 0,
              xFormat = d3.time.format('%Y'),
              chart = new xChart('line-dotted', data[order[i]], '#chart3', {
                axisPaddingTop: 5,
                dataFormatX: function(x) {
                  return new Date(x);
                },
                tickFormatX: function(x) {
                  return xFormat(x);
                },
                timing: 1250
              }),
              rotateTimer,
              toggles = d3.selectAll('.multi button'),
              t = 3500;

            function updateChart(i) {
              var d = data[i];
              chart.setData(d);
              toggles.classed('toggled', function() {
                return (d3.select(this).attr('data-type') === d.type);
              });
              return d;
            }

            toggles.on('click', function(d, i) {
              clearTimeout(rotateTimer);
              updateChart(i);
            });

            function rotateChart() {
              i += 1;
              i = (i >= order.length) ? 0 : i;
              var d = updateChart(order[i]);
              rotateTimer = setTimeout(rotateChart, t);
            }
            rotateTimer = setTimeout(rotateChart, t);
          }());

        <?php

  } else {
echo "<div class='alert alert-danger'><b>Oh no!</b>Aún no existen datos para mostar.</div>";
  }
 ?>
</script>
