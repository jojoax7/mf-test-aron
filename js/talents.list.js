const services = "services/index.php"
const getTalents = function () {
  $.ajax({
    url: services,
    type: "GET",
    data: {
      a: "getTalents"
    },
    dataType: "json"
  })
  .success(function(data) {
    let template = `{{#talents}}
                    <tr>
                      <td>{{id}}</td>
                      <td>{{name}}</td>
                      <td>{{city}}</td>
                      <td>{{email}}</td>
                      <td>{{phone}}</td>
                    </tr>
                    {{/talents}}`
    let talents = Mustache.render(template, data);
    $("#talents-list tbody").empty().append(talents);
  })
  .fail(function (error) {
    
  })
}

getTalents()