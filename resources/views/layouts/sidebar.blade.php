<!-- Sidebar-right-->
@if (session()->has('successfromSide'))
<script>
    window.onload = function() {
            notif({
                msg: "{{ session('successfromSide') }}",
                type: "success"
            })
        }
</script>
@endif
<div class="sidebar sidebar-left sidebar-animate" style="width: auto">
    <div class="panel panel-primary card mb-0 box-shadow">
        <div class="tab-menu-heading border-0 p-3">
            <div class="card-title mb-0">السجل اليومي</div>
            <div class="card-options mr-auto">
                <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>
        <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu ">
                <!-- Tabs -->
                <ul class="nav panel-tabs">

                    <li><a href="#side2" class="active" data-toggle="tab"><i
                                class="ion ion-md-notifications tx-18  ml-2"></i> منفستو</a></li>
                    <li><a href="#side3" data-toggle="tab" id="a-side3"><i
                                class="ion ion-md-contacts tx-18 ml-2"></i> مخالفات</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div class="tab-pane active " id="side2" >
                    <div class="list-group list-group-flush ">
                        <livewire:manfisto />

                    </div>
                </div>
                <div class="tab-pane" id="side3">
                    <div class="list-group list-group-flush ">
                        <livewire:today-penalty>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--/Sidebar-right-->
