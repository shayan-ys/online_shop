<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/11/15
 * Time: 7:43 PM
 */
$current[$title] = "class=current";
?>

<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li {{ $current['Dashboard'] }}><a href="{{ asset('/admin') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li {{ $current['Product'] or '' }}><a href="{{ asset('/admin/product') }}"><i class="glyphicon glyphicon-tags"></i> Product</a></li>
            <li {{ $current[''] or '' }}><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
            <li {{ $current[''] or '' }}><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
            <li {{ $current[''] or '' }}><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
            <li {{ $current[''] or '' }}><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
            <li {{ $current[''] or '' }}><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
        </ul>
    </div>
</div>
