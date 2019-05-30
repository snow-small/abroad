@extends('layout.user.layout')

@section('body')

    @include('layout.user.header')

    <div class="getValue" style="width:1000px;margin:50px auto;text-align:center;">
        <h2 style="margin-bottom:30px;">测评结果</h2>
        <div id="getValue" style="width:600px;margin:0 200px;height:400px;"></div>

        <div class="getValue-introduce" style="padding:10px;margin-left:20px;">
            <h3 style="margin: 20px 0;">结果分析</h3>
            <div style="width:800px;margin:0 auto;text-align:left;">
                <h4>经测评：</h4>
                <p style="font-size:15px;">您最适合的方向是：{{ $professionTotal[$keys[0]]['name'] }}</p>
                <p style="font-size:15px;">可以选择的专业是：{{ $professionTotal[$keys[0]]['contain'] }}</p>
                <br>
                <h5 style="font-size:15px;">如果您觉得还有更好的选择，此外这里向您推荐选择别的方向：</h5>
                <h5>FIRST：</h5>
                <p style="font-size:14px;">推荐给您的方向是：{{ $professionTotal[$keys[1]]['name'] }}</p>
                <p style="font-size:14px;">可以选择的专业是：{{ $professionTotal[$keys[1]]['contain'] }}</p>

                <h5>SECOND：</h5>
                <p style="font-size:14px;">推荐给您的方向是：{{ $professionTotal[$keys[2]]['name'] }}</p>
                <p style="font-size:14px;">可以选择的专业是：{{ $professionTotal[$keys[2]]['contain'] }}</p>

                <h5>THIRD：</h5>
                <p style="font-size:14px;">推荐给您的方向是：{{ $professionTotal[$keys[3]]['name'] }}</p>
                <p style="font-size:14px;">可以选择的专业是：{{ $professionTotal[$keys[3]]['contain'] }}</p>

            </div>



        </div>
    </div>

    <script>
        function getValue ()
        {
            var getValue = echarts.init(document.getElementById('getValue'));
            option = {
                title : {
                    text: '专业测评结果',
                    x:'center'
                },
                tooltip : {
                    trigger: 'item'
                },
                legend: {
                    orient : 'vertical',
                    x : 'left',
                    data:['经济学','工学','文学','管理学','理学', '艺术设计学']
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {
                            show: true,
                            type: ['line', 'bar']
                        },
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                series : [
                    {
                        name:'专业测评',
                        type:'pie',
                        radius : '55%',
                        center: ['50%', '60%'],
                        data:[
                            {value:{{ $total['visual'] }}, name:'经济学'},
                            {value:{{ $total['tactile'] }}, name:'工学'},
                            {value:{{ $total['auditory'] }}, name:'文学'},
                            {value:{{ $total['p_group'] }}, name:'管理学'},
                            {value:{{ $total['kinesthetic'] }}, name:'理学'},
                            {value:{{ $total['individual'] }}, name:'艺术设计学'}
                        ]
                    }
                ]
            };

            getValue.setOption(option);
        }
        setTimeout('getValue()', 0);


    </script>

    @include('layout.user.footer')
@stop