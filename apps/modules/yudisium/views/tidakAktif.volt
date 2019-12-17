{% extends 'layout.volt' %}

{% block title %}Home{% endblock %}

{% block styles %}


{% endblock %}

{% block content %}
datas.getResponse()
<!-- <h1>Status Lulus</h1>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">wisuda</th>
        <th scope="col">urutan</th>
        <th scope="col">tanggal awal</th>
        <th scope="col">tanggal akhir</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      {% for wisuda in datas.getResponse() %} 
      <tr>
          <th scope="row">{{ wisuda['wisuda'] }}</th>
          <td>{{ wisuda['urutan'] }}</td>
          <td>{{ wisuda['tanggalawal'] }}</td>
          <td>{{ wisuda['tanggalakhir'] }}</td>
          <td>{{ wisuda['status'] }}</td>
        </tr> 
      {% endfor %}
    </tbody>
  </table>
  <a href="{{url('yudisium/add/')}}" role="button" class="btn btn-primary btn-lg">Tambah Data yudisium</a>&emsp;
  <form action="{{url('yudisium/create-laporan')}}" method="POST">
    <button type="submit" class="btn btn-primary">Download</button>
    <input type="hidden" name="status" value="tidak aktif" >
  </form> -->
{% endblock %}

{% block scripts %}
<!-- idea_title -->
{% endblock %}