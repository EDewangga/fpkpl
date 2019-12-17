{% extends 'layout.volt' %}

{% block title %}Home{% endblock %}

{% block styles %}


{% endblock %}

{% block content %}
<div class="container">
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Syarat</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      {% for ID in datas.getResponse() %} 
      <tr>
          <th scope="row">{{ ID['ID'] }}</th>
          <td>{{ ID['namasyarat'] }}</td>
          <td>{{ ID['nilai'] }}</td>
        </tr> 
      {% endfor %}
    </tbody>
  </table>
</div>
{% endblock %}

{% block scripts %}
<!-- idea_title -->
{% endblock %}