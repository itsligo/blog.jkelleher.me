---
title: Retention in Computing
taxonomy:
    tag: [education]
published: false
image: identities.jpg
slug: retention-computing
template: chart-post
process:
    twig: true
markdown:
    extra: true
highlight:
  theme: dark
---
#Charting retention in Computing

Understanding the reasons for attrition in computing programmes is paramount to ameliorating the problem. However, understanding the problem requires some analysis.

![Retention](computing-retention.png)
 
 <div id="sankey_basic" style="width: 900px; height: 300px;"></div>

 <script>
    
    google.charts.load('current', {'packages':['sankey']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'From');
        data.addColumn('string', 'To');
        data.addColumn('number', 'Weight');
        data.addRows([
          [ 'A', 'X', 5 ],
          [ 'A', 'Y', 7 ],
          [ 'A', 'Z', 6 ],
          [ 'B', 'X', 2 ],
          [ 'B', 'Y', 9 ],
          [ 'B', 'Z', 1 ],
          [ 'B', 'W', 3]
        ]);

        // Sets chart options.
        var options = {
          width: 600,
        };

        // Instantiates and draws our chart, passing in some options.
        var chart = new google.visualization.Sankey(document.getElementById('sankey_basic'));
        chart.draw(data, options);
      }
    </script>