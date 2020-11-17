const services = "services/index.php"
const getCities = function () {
  $.ajax({
    url: services,
    type: "GET",
    data: {
      a: "getCities"
    },
    dataType: "json"
  })
  .success(function(data) {
    let template = `{{#cities}}<option value="{{id}}">{{name}}</option>{{/cities}}`
    let options = Mustache.render(template, data);
    $("#city").empty().append(options);
  })
  .fail(function (error) {
    
  })
}

const saveUser = function(event){
    event.preventDefault();
    let talent = {
      name: $("#name").val(),
      city: $("#city").val(),
    }

    if(talent.name != ''){
      $.ajax({
        url: services,
        type: "POST",
        data: {
          a: "saveTalent",
          talent: talent
        },
        dataType: "json"
      })
      .success(function(data) {

      })
      .fail(function (error) {
        
      })
    }else{
        console.log('Empty Field')
    }
}

getCities()