{% extends 'layout.volt' %}

{% block title %}Home{% endblock %}

{% block styles %}


{% endblock %}

{% block content %}
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NRP</th>
        <th scope="col">Nama</th>
        <th scope="col">IPK</th>
        <th scope="col">Wisuda</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      {% for ID in datas.getResponse() %} 
      <tr>
          <th scope="row">{{ ID['nrp'] }}</th>
          <td>{{ ID['nama'] }}</td>
          <td>{{ ID['ipk'] }}</td>
          <td>{{ ID['wisuda'] }}</td>
          <td>{{ ID['status'] }}</td>
        </tr> 
      {% endfor %}
    </tbody>
  </table>

  <a href="{{url('')}}" role="button" class="btn btn-secondary btn-sm">Back</a>
{% endblock %}

{% block scripts %}
<!-- idea_title -->
{% endblock %}