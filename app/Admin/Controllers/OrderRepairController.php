<?php

namespace App\Admin\Controllers;

use App\History;
use App\Order;

use App\Status;
use App\StatusRepairs;
use App\UserConsent;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class OrderRepairController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Заказы');
            $content->description('на ремонт');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Заказы');
            $content->description('на ремонт');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Заказы');
            $content->description('на ремонт');

            $content->body($this->form());
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Order::class, function (Form $form) {

            $form->tab('Клиент/Компания', function(Form $form) {;

                $form->display('id', 'ID');
                $form->select('status_id', 'Статус заказа')->options(Status::all()->pluck('name', 'id'));
                $form->display('user.name', 'ник заказчика');
                $form->display('type_order.name', 'тип заказа');
                $form->html( function (){
                    $val = $this->user->profile->type_client_id;
                    return '<div class="box box-solid box-default no-margin"><div class="box-body">'.$val.'</div></div>';
                }, 'тип клиента');
                $form->html( function (){
                    $val = $this->user->profile->client_name;
                    return '<div class="box box-solid box-default no-margin"><div class="box-body">'.$val.'</div></div>';
                }, 'ФИО заказчика/Название компании');
                $form->html( function (){
                    $val = $this->user->profile->phone;
                    return '<div class="box box-solid box-default no-margin"><div class="box-body">'.$val.'</div></div>';
                }, 'телефон');
                $form->html( function (){
                    $val = $this->user->profile->service_office->name;
                    return '<div class="box box-solid box-default no-margin"><div class="box-body">'.$val.'</div></div>';
                }, 'офис обслуживания');
                $form->display('comment', 'комментарий');
                $form->display('created_at', 'Created At');
                $form->display('updated_at', 'Updated At');
            })->tab('Адрес доставки', function(Form $form){
                $form->display('delivery_town', 'город, населенный пункт');
                $form->display('delivery_street', 'улицаt');
                $form->display('delivery_house', 'дом');
                $form->display('delivery_house_block', 'корпус');
                $form->display('delivery_office', 'квартира');
            })->tab('Параметры ремонта', function (Form $form) {
                $form->select('act_repair.status_repair_id', 'Статус ремонта')->options(StatusRepairs::all()->pluck('name', 'id'))->rules('required');
                $form->text('act_repair.device', 'ремонтируемое устройство')->rules('required');
                $form->text('act_repair.set_device', 'комплектация')->rules('required');
                $form->textarea('act_repair.text_defect', 'описание деффекта')->rules('required');
                $form->textarea('act_repair.diagnostic', 'диагностика')->rules('required');
                $form->text('act_repair.cost', 'стоимость')->rules('required');
                $form->textarea('act_repair.comment', 'комментарий');
                $form->select('act_repair.user_consent_id', 'Ответ заказчика')->options(UserConsent::all()->pluck('name', 'id'))->readOnly();
            })->tab('История', function(Form $form){
                $form->html(function($form){
                    $histories = History::where('order_id', $form->model()->id)->get();
                    return view('admin.history', ['histories' => $histories]);
                });

            });
        });
    }
}
