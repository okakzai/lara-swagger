@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Flag</h3>
                <p class="text-subtitle text-muted">
                    A flag that can represent a country or flag visually.
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Flag</li>
                    </ol> 
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of all flags</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Flag</th>
                            <th>Code</th>
                            <th>Usage</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td><span class="flag flag-country-ad"></span></td>
                            <td><code>ad</code></td>
                            <td><code>.flag-country-ad</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ae"></span></td>
                            <td><code>ae</code></td>
                            <td><code>.flag-country-ae</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-af"></span></td>
                            <td><code>af</code></td>
                            <td><code>.flag-country-af</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ag"></span></td>
                            <td><code>ag</code></td>
                            <td><code>.flag-country-ag</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ai"></span></td>
                            <td><code>ai</code></td>
                            <td><code>.flag-country-ai</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-al"></span></td>
                            <td><code>al</code></td>
                            <td><code>.flag-country-al</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-am"></span></td>
                            <td><code>am</code></td>
                            <td><code>.flag-country-am</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ao"></span></td>
                            <td><code>ao</code></td>
                            <td><code>.flag-country-ao</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-aq"></span></td>
                            <td><code>aq</code></td>
                            <td><code>.flag-country-aq</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ar"></span></td>
                            <td><code>ar</code></td>
                            <td><code>.flag-country-ar</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-as"></span></td>
                            <td><code>as</code></td>
                            <td><code>.flag-country-as</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-at"></span></td>
                            <td><code>at</code></td>
                            <td><code>.flag-country-at</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-au"></span></td>
                            <td><code>au</code></td>
                            <td><code>.flag-country-au</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-aw"></span></td>
                            <td><code>aw</code></td>
                            <td><code>.flag-country-aw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ax"></span></td>
                            <td><code>ax</code></td>
                            <td><code>.flag-country-ax</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-az"></span></td>
                            <td><code>az</code></td>
                            <td><code>.flag-country-az</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ba"></span></td>
                            <td><code>ba</code></td>
                            <td><code>.flag-country-ba</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bb"></span></td>
                            <td><code>bb</code></td>
                            <td><code>.flag-country-bb</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bd"></span></td>
                            <td><code>bd</code></td>
                            <td><code>.flag-country-bd</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-be"></span></td>
                            <td><code>be</code></td>
                            <td><code>.flag-country-be</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bf"></span></td>
                            <td><code>bf</code></td>
                            <td><code>.flag-country-bf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bg"></span></td>
                            <td><code>bg</code></td>
                            <td><code>.flag-country-bg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bh"></span></td>
                            <td><code>bh</code></td>
                            <td><code>.flag-country-bh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bi"></span></td>
                            <td><code>bi</code></td>
                            <td><code>.flag-country-bi</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bj"></span></td>
                            <td><code>bj</code></td>
                            <td><code>.flag-country-bj</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bl"></span></td>
                            <td><code>bl</code></td>
                            <td><code>.flag-country-bl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bm"></span></td>
                            <td><code>bm</code></td>
                            <td><code>.flag-country-bm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bn"></span></td>
                            <td><code>bn</code></td>
                            <td><code>.flag-country-bn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bo"></span></td>
                            <td><code>bo</code></td>
                            <td><code>.flag-country-bo</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bq"></span></td>
                            <td><code>bq</code></td>
                            <td><code>.flag-country-bq</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-br"></span></td>
                            <td><code>br</code></td>
                            <td><code>.flag-country-br</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bs"></span></td>
                            <td><code>bs</code></td>
                            <td><code>.flag-country-bs</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bt"></span></td>
                            <td><code>bt</code></td>
                            <td><code>.flag-country-bt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bv"></span></td>
                            <td><code>bv</code></td>
                            <td><code>.flag-country-bv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bw"></span></td>
                            <td><code>bw</code></td>
                            <td><code>.flag-country-bw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-by"></span></td>
                            <td><code>by</code></td>
                            <td><code>.flag-country-by</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-bz"></span></td>
                            <td><code>bz</code></td>
                            <td><code>.flag-country-bz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ca"></span></td>
                            <td><code>ca</code></td>
                            <td><code>.flag-country-ca</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cc"></span></td>
                            <td><code>cc</code></td>
                            <td><code>.flag-country-cc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cd"></span></td>
                            <td><code>cd</code></td>
                            <td><code>.flag-country-cd</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cf"></span></td>
                            <td><code>cf</code></td>
                            <td><code>.flag-country-cf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cg"></span></td>
                            <td><code>cg</code></td>
                            <td><code>.flag-country-cg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ch"></span></td>
                            <td><code>ch</code></td>
                            <td><code>.flag-country-ch</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ci"></span></td>
                            <td><code>ci</code></td>
                            <td><code>.flag-country-ci</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ck"></span></td>
                            <td><code>ck</code></td>
                            <td><code>.flag-country-ck</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cl"></span></td>
                            <td><code>cl</code></td>
                            <td><code>.flag-country-cl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cm"></span></td>
                            <td><code>cm</code></td>
                            <td><code>.flag-country-cm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cn"></span></td>
                            <td><code>cn</code></td>
                            <td><code>.flag-country-cn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-co"></span></td>
                            <td><code>co</code></td>
                            <td><code>.flag-country-co</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cr"></span></td>
                            <td><code>cr</code></td>
                            <td><code>.flag-country-cr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cu"></span></td>
                            <td><code>cu</code></td>
                            <td><code>.flag-country-cu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cv"></span></td>
                            <td><code>cv</code></td>
                            <td><code>.flag-country-cv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cw"></span></td>
                            <td><code>cw</code></td>
                            <td><code>.flag-country-cw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cx"></span></td>
                            <td><code>cx</code></td>
                            <td><code>.flag-country-cx</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cy"></span></td>
                            <td><code>cy</code></td>
                            <td><code>.flag-country-cy</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-cz"></span></td>
                            <td><code>cz</code></td>
                            <td><code>.flag-country-cz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-de"></span></td>
                            <td><code>de</code></td>
                            <td><code>.flag-country-de</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-dj"></span></td>
                            <td><code>dj</code></td>
                            <td><code>.flag-country-dj</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-dk"></span></td>
                            <td><code>dk</code></td>
                            <td><code>.flag-country-dk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-dm"></span></td>
                            <td><code>dm</code></td>
                            <td><code>.flag-country-dm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-do"></span></td>
                            <td><code>do</code></td>
                            <td><code>.flag-country-do</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-dz"></span></td>
                            <td><code>dz</code></td>
                            <td><code>.flag-country-dz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ec"></span></td>
                            <td><code>ec</code></td>
                            <td><code>.flag-country-ec</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ee"></span></td>
                            <td><code>ee</code></td>
                            <td><code>.flag-country-ee</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-eg"></span></td>
                            <td><code>eg</code></td>
                            <td><code>.flag-country-eg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-eh"></span></td>
                            <td><code>eh</code></td>
                            <td><code>.flag-country-eh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-er"></span></td>
                            <td><code>er</code></td>
                            <td><code>.flag-country-er</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-es"></span></td>
                            <td><code>es</code></td>
                            <td><code>.flag-country-es</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-et"></span></td>
                            <td><code>et</code></td>
                            <td><code>.flag-country-et</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-eu"></span></td>
                            <td><code>eu</code></td>
                            <td><code>.flag-country-eu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fi"></span></td>
                            <td><code>fi</code></td>
                            <td><code>.flag-country-fi</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fj"></span></td>
                            <td><code>fj</code></td>
                            <td><code>.flag-country-fj</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fk"></span></td>
                            <td><code>fk</code></td>
                            <td><code>.flag-country-fk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fm"></span></td>
                            <td><code>fm</code></td>
                            <td><code>.flag-country-fm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fo"></span></td>
                            <td><code>fo</code></td>
                            <td><code>.flag-country-fo</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-fr"></span></td>
                            <td><code>fr</code></td>
                            <td><code>.flag-country-fr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ga"></span></td>
                            <td><code>ga</code></td>
                            <td><code>.flag-country-ga</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gb-eng"></span></td>
                            <td><code>gb-eng</code></td>
                            <td><code>.flag-country-gb-eng</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gb-nir"></span></td>
                            <td><code>gb-nir</code></td>
                            <td><code>.flag-country-gb-nir</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gb-sct"></span></td>
                            <td><code>gb-sct</code></td>
                            <td><code>.flag-country-gb-sct</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gb-wls"></span></td>
                            <td><code>gb-wls</code></td>
                            <td><code>.flag-country-gb-wls</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gb"></span></td>
                            <td><code>gb</code></td>
                            <td><code>.flag-country-gb</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gd"></span></td>
                            <td><code>gd</code></td>
                            <td><code>.flag-country-gd</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ge"></span></td>
                            <td><code>ge</code></td>
                            <td><code>.flag-country-ge</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gf"></span></td>
                            <td><code>gf</code></td>
                            <td><code>.flag-country-gf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gg"></span></td>
                            <td><code>gg</code></td>
                            <td><code>.flag-country-gg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gh"></span></td>
                            <td><code>gh</code></td>
                            <td><code>.flag-country-gh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gi"></span></td>
                            <td><code>gi</code></td>
                            <td><code>.flag-country-gi</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gl"></span></td>
                            <td><code>gl</code></td>
                            <td><code>.flag-country-gl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gm"></span></td>
                            <td><code>gm</code></td>
                            <td><code>.flag-country-gm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gn"></span></td>
                            <td><code>gn</code></td>
                            <td><code>.flag-country-gn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gp"></span></td>
                            <td><code>gp</code></td>
                            <td><code>.flag-country-gp</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gq"></span></td>
                            <td><code>gq</code></td>
                            <td><code>.flag-country-gq</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gr"></span></td>
                            <td><code>gr</code></td>
                            <td><code>.flag-country-gr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gs"></span></td>
                            <td><code>gs</code></td>
                            <td><code>.flag-country-gs</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gt"></span></td>
                            <td><code>gt</code></td>
                            <td><code>.flag-country-gt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gu"></span></td>
                            <td><code>gu</code></td>
                            <td><code>.flag-country-gu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gw"></span></td>
                            <td><code>gw</code></td>
                            <td><code>.flag-country-gw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-gy"></span></td>
                            <td><code>gy</code></td>
                            <td><code>.flag-country-gy</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-hk"></span></td>
                            <td><code>hk</code></td>
                            <td><code>.flag-country-hk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-hm"></span></td>
                            <td><code>hm</code></td>
                            <td><code>.flag-country-hm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-hn"></span></td>
                            <td><code>hn</code></td>
                            <td><code>.flag-country-hn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-hr"></span></td>
                            <td><code>hr</code></td>
                            <td><code>.flag-country-hr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ht"></span></td>
                            <td><code>ht</code></td>
                            <td><code>.flag-country-ht</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-hu"></span></td>
                            <td><code>hu</code></td>
                            <td><code>.flag-country-hu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-id"></span></td>
                            <td><code>id</code></td>
                            <td><code>.flag-country-id</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ie"></span></td>
                            <td><code>ie</code></td>
                            <td><code>.flag-country-ie</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-il"></span></td>
                            <td><code>il</code></td>
                            <td><code>.flag-country-il</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-im"></span></td>
                            <td><code>im</code></td>
                            <td><code>.flag-country-im</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-in"></span></td>
                            <td><code>in</code></td>
                            <td><code>.flag-country-in</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-io"></span></td>
                            <td><code>io</code></td>
                            <td><code>.flag-country-io</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-iq"></span></td>
                            <td><code>iq</code></td>
                            <td><code>.flag-country-iq</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ir"></span></td>
                            <td><code>ir</code></td>
                            <td><code>.flag-country-ir</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-is"></span></td>
                            <td><code>is</code></td>
                            <td><code>.flag-country-is</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-it"></span></td>
                            <td><code>it</code></td>
                            <td><code>.flag-country-it</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-je"></span></td>
                            <td><code>je</code></td>
                            <td><code>.flag-country-je</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-jm"></span></td>
                            <td><code>jm</code></td>
                            <td><code>.flag-country-jm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-jo"></span></td>
                            <td><code>jo</code></td>
                            <td><code>.flag-country-jo</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-jp"></span></td>
                            <td><code>jp</code></td>
                            <td><code>.flag-country-jp</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ke"></span></td>
                            <td><code>ke</code></td>
                            <td><code>.flag-country-ke</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kg"></span></td>
                            <td><code>kg</code></td>
                            <td><code>.flag-country-kg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kh"></span></td>
                            <td><code>kh</code></td>
                            <td><code>.flag-country-kh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ki"></span></td>
                            <td><code>ki</code></td>
                            <td><code>.flag-country-ki</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-km"></span></td>
                            <td><code>km</code></td>
                            <td><code>.flag-country-km</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kn"></span></td>
                            <td><code>kn</code></td>
                            <td><code>.flag-country-kn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kp"></span></td>
                            <td><code>kp</code></td>
                            <td><code>.flag-country-kp</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kr"></span></td>
                            <td><code>kr</code></td>
                            <td><code>.flag-country-kr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kw"></span></td>
                            <td><code>kw</code></td>
                            <td><code>.flag-country-kw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ky"></span></td>
                            <td><code>ky</code></td>
                            <td><code>.flag-country-ky</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-kz"></span></td>
                            <td><code>kz</code></td>
                            <td><code>.flag-country-kz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-la"></span></td>
                            <td><code>la</code></td>
                            <td><code>.flag-country-la</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lb"></span></td>
                            <td><code>lb</code></td>
                            <td><code>.flag-country-lb</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lc"></span></td>
                            <td><code>lc</code></td>
                            <td><code>.flag-country-lc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-li"></span></td>
                            <td><code>li</code></td>
                            <td><code>.flag-country-li</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lk"></span></td>
                            <td><code>lk</code></td>
                            <td><code>.flag-country-lk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lr"></span></td>
                            <td><code>lr</code></td>
                            <td><code>.flag-country-lr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ls"></span></td>
                            <td><code>ls</code></td>
                            <td><code>.flag-country-ls</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lt"></span></td>
                            <td><code>lt</code></td>
                            <td><code>.flag-country-lt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lu"></span></td>
                            <td><code>lu</code></td>
                            <td><code>.flag-country-lu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-lv"></span></td>
                            <td><code>lv</code></td>
                            <td><code>.flag-country-lv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ly"></span></td>
                            <td><code>ly</code></td>
                            <td><code>.flag-country-ly</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ma"></span></td>
                            <td><code>ma</code></td>
                            <td><code>.flag-country-ma</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mc"></span></td>
                            <td><code>mc</code></td>
                            <td><code>.flag-country-mc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-md"></span></td>
                            <td><code>md</code></td>
                            <td><code>.flag-country-md</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-me"></span></td>
                            <td><code>me</code></td>
                            <td><code>.flag-country-me</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mf"></span></td>
                            <td><code>mf</code></td>
                            <td><code>.flag-country-mf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mg"></span></td>
                            <td><code>mg</code></td>
                            <td><code>.flag-country-mg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mh"></span></td>
                            <td><code>mh</code></td>
                            <td><code>.flag-country-mh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mk"></span></td>
                            <td><code>mk</code></td>
                            <td><code>.flag-country-mk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ml"></span></td>
                            <td><code>ml</code></td>
                            <td><code>.flag-country-ml</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mm"></span></td>
                            <td><code>mm</code></td>
                            <td><code>.flag-country-mm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mn"></span></td>
                            <td><code>mn</code></td>
                            <td><code>.flag-country-mn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mo"></span></td>
                            <td><code>mo</code></td>
                            <td><code>.flag-country-mo</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mp"></span></td>
                            <td><code>mp</code></td>
                            <td><code>.flag-country-mp</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mq"></span></td>
                            <td><code>mq</code></td>
                            <td><code>.flag-country-mq</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mr"></span></td>
                            <td><code>mr</code></td>
                            <td><code>.flag-country-mr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ms"></span></td>
                            <td><code>ms</code></td>
                            <td><code>.flag-country-ms</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mt"></span></td>
                            <td><code>mt</code></td>
                            <td><code>.flag-country-mt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mu"></span></td>
                            <td><code>mu</code></td>
                            <td><code>.flag-country-mu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mv"></span></td>
                            <td><code>mv</code></td>
                            <td><code>.flag-country-mv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mw"></span></td>
                            <td><code>mw</code></td>
                            <td><code>.flag-country-mw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mx"></span></td>
                            <td><code>mx</code></td>
                            <td><code>.flag-country-mx</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-my"></span></td>
                            <td><code>my</code></td>
                            <td><code>.flag-country-my</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-mz"></span></td>
                            <td><code>mz</code></td>
                            <td><code>.flag-country-mz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-na"></span></td>
                            <td><code>na</code></td>
                            <td><code>.flag-country-na</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nc"></span></td>
                            <td><code>nc</code></td>
                            <td><code>.flag-country-nc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ne"></span></td>
                            <td><code>ne</code></td>
                            <td><code>.flag-country-ne</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nf"></span></td>
                            <td><code>nf</code></td>
                            <td><code>.flag-country-nf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ng"></span></td>
                            <td><code>ng</code></td>
                            <td><code>.flag-country-ng</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ni"></span></td>
                            <td><code>ni</code></td>
                            <td><code>.flag-country-ni</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nl"></span></td>
                            <td><code>nl</code></td>
                            <td><code>.flag-country-nl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-no"></span></td>
                            <td><code>no</code></td>
                            <td><code>.flag-country-no</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-np"></span></td>
                            <td><code>np</code></td>
                            <td><code>.flag-country-np</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nr"></span></td>
                            <td><code>nr</code></td>
                            <td><code>.flag-country-nr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nu"></span></td>
                            <td><code>nu</code></td>
                            <td><code>.flag-country-nu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-nz"></span></td>
                            <td><code>nz</code></td>
                            <td><code>.flag-country-nz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-om"></span></td>
                            <td><code>om</code></td>
                            <td><code>.flag-country-om</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pa"></span></td>
                            <td><code>pa</code></td>
                            <td><code>.flag-country-pa</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pe"></span></td>
                            <td><code>pe</code></td>
                            <td><code>.flag-country-pe</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pf"></span></td>
                            <td><code>pf</code></td>
                            <td><code>.flag-country-pf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pg"></span></td>
                            <td><code>pg</code></td>
                            <td><code>.flag-country-pg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ph"></span></td>
                            <td><code>ph</code></td>
                            <td><code>.flag-country-ph</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pk"></span></td>
                            <td><code>pk</code></td>
                            <td><code>.flag-country-pk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pl"></span></td>
                            <td><code>pl</code></td>
                            <td><code>.flag-country-pl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pm"></span></td>
                            <td><code>pm</code></td>
                            <td><code>.flag-country-pm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pn"></span></td>
                            <td><code>pn</code></td>
                            <td><code>.flag-country-pn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pr"></span></td>
                            <td><code>pr</code></td>
                            <td><code>.flag-country-pr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ps"></span></td>
                            <td><code>ps</code></td>
                            <td><code>.flag-country-ps</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pt"></span></td>
                            <td><code>pt</code></td>
                            <td><code>.flag-country-pt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-pw"></span></td>
                            <td><code>pw</code></td>
                            <td><code>.flag-country-pw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-py"></span></td>
                            <td><code>py</code></td>
                            <td><code>.flag-country-py</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-qa"></span></td>
                            <td><code>qa</code></td>
                            <td><code>.flag-country-qa</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-re"></span></td>
                            <td><code>re</code></td>
                            <td><code>.flag-country-re</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ro"></span></td>
                            <td><code>ro</code></td>
                            <td><code>.flag-country-ro</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-rs"></span></td>
                            <td><code>rs</code></td>
                            <td><code>.flag-country-rs</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ru"></span></td>
                            <td><code>ru</code></td>
                            <td><code>.flag-country-ru</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-rw"></span></td>
                            <td><code>rw</code></td>
                            <td><code>.flag-country-rw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sa"></span></td>
                            <td><code>sa</code></td>
                            <td><code>.flag-country-sa</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sb"></span></td>
                            <td><code>sb</code></td>
                            <td><code>.flag-country-sb</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sc"></span></td>
                            <td><code>sc</code></td>
                            <td><code>.flag-country-sc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sd"></span></td>
                            <td><code>sd</code></td>
                            <td><code>.flag-country-sd</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-se"></span></td>
                            <td><code>se</code></td>
                            <td><code>.flag-country-se</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sg"></span></td>
                            <td><code>sg</code></td>
                            <td><code>.flag-country-sg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sh"></span></td>
                            <td><code>sh</code></td>
                            <td><code>.flag-country-sh</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-si"></span></td>
                            <td><code>si</code></td>
                            <td><code>.flag-country-si</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sj"></span></td>
                            <td><code>sj</code></td>
                            <td><code>.flag-country-sj</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sk"></span></td>
                            <td><code>sk</code></td>
                            <td><code>.flag-country-sk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sl"></span></td>
                            <td><code>sl</code></td>
                            <td><code>.flag-country-sl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sm"></span></td>
                            <td><code>sm</code></td>
                            <td><code>.flag-country-sm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sn"></span></td>
                            <td><code>sn</code></td>
                            <td><code>.flag-country-sn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-so"></span></td>
                            <td><code>so</code></td>
                            <td><code>.flag-country-so</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sr"></span></td>
                            <td><code>sr</code></td>
                            <td><code>.flag-country-sr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ss"></span></td>
                            <td><code>ss</code></td>
                            <td><code>.flag-country-ss</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-st"></span></td>
                            <td><code>st</code></td>
                            <td><code>.flag-country-st</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sv"></span></td>
                            <td><code>sv</code></td>
                            <td><code>.flag-country-sv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sx"></span></td>
                            <td><code>sx</code></td>
                            <td><code>.flag-country-sx</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sy"></span></td>
                            <td><code>sy</code></td>
                            <td><code>.flag-country-sy</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-sz"></span></td>
                            <td><code>sz</code></td>
                            <td><code>.flag-country-sz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tc"></span></td>
                            <td><code>tc</code></td>
                            <td><code>.flag-country-tc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-td"></span></td>
                            <td><code>td</code></td>
                            <td><code>.flag-country-td</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tf"></span></td>
                            <td><code>tf</code></td>
                            <td><code>.flag-country-tf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tg"></span></td>
                            <td><code>tg</code></td>
                            <td><code>.flag-country-tg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-th"></span></td>
                            <td><code>th</code></td>
                            <td><code>.flag-country-th</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tj"></span></td>
                            <td><code>tj</code></td>
                            <td><code>.flag-country-tj</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tk"></span></td>
                            <td><code>tk</code></td>
                            <td><code>.flag-country-tk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tl"></span></td>
                            <td><code>tl</code></td>
                            <td><code>.flag-country-tl</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tm"></span></td>
                            <td><code>tm</code></td>
                            <td><code>.flag-country-tm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tn"></span></td>
                            <td><code>tn</code></td>
                            <td><code>.flag-country-tn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-to"></span></td>
                            <td><code>to</code></td>
                            <td><code>.flag-country-to</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tr"></span></td>
                            <td><code>tr</code></td>
                            <td><code>.flag-country-tr</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tt"></span></td>
                            <td><code>tt</code></td>
                            <td><code>.flag-country-tt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tv"></span></td>
                            <td><code>tv</code></td>
                            <td><code>.flag-country-tv</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tw"></span></td>
                            <td><code>tw</code></td>
                            <td><code>.flag-country-tw</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-tz"></span></td>
                            <td><code>tz</code></td>
                            <td><code>.flag-country-tz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ua"></span></td>
                            <td><code>ua</code></td>
                            <td><code>.flag-country-ua</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ug"></span></td>
                            <td><code>ug</code></td>
                            <td><code>.flag-country-ug</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-um"></span></td>
                            <td><code>um</code></td>
                            <td><code>.flag-country-um</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-us"></span></td>
                            <td><code>us</code></td>
                            <td><code>.flag-country-us</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-uy"></span></td>
                            <td><code>uy</code></td>
                            <td><code>.flag-country-uy</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-uz"></span></td>
                            <td><code>uz</code></td>
                            <td><code>.flag-country-uz</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-va"></span></td>
                            <td><code>va</code></td>
                            <td><code>.flag-country-va</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-vc"></span></td>
                            <td><code>vc</code></td>
                            <td><code>.flag-country-vc</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ve"></span></td>
                            <td><code>ve</code></td>
                            <td><code>.flag-country-ve</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-vg"></span></td>
                            <td><code>vg</code></td>
                            <td><code>.flag-country-vg</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-vi"></span></td>
                            <td><code>vi</code></td>
                            <td><code>.flag-country-vi</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-vn"></span></td>
                            <td><code>vn</code></td>
                            <td><code>.flag-country-vn</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-vu"></span></td>
                            <td><code>vu</code></td>
                            <td><code>.flag-country-vu</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-wf"></span></td>
                            <td><code>wf</code></td>
                            <td><code>.flag-country-wf</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ws"></span></td>
                            <td><code>ws</code></td>
                            <td><code>.flag-country-ws</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-xk"></span></td>
                            <td><code>xk</code></td>
                            <td><code>.flag-country-xk</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-ye"></span></td>
                            <td><code>ye</code></td>
                            <td><code>.flag-country-ye</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-yt"></span></td>
                            <td><code>yt</code></td>
                            <td><code>.flag-country-yt</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-za"></span></td>
                            <td><code>za</code></td>
                            <td><code>.flag-country-za</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-zm"></span></td>
                            <td><code>zm</code></td>
                            <td><code>.flag-country-zm</code></td>
                        </tr>
                        
                        <tr>
                            <td><span class="flag flag-country-zw"></span></td>
                            <td><code>zw</code></td>
                            <td><code>.flag-country-zw</code></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/extra-component-flag.css') }}">
@endpush


