<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Http\Requests\FormUpdateRequest;
use App\Models\Form;
use App\Models\FormModel;
use App\Models\Entity;
use Illuminate\Http\Request;
use App\Helpers\Uiform_Form_Helper;

class FormController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $forms = FormModel::paginate(5);
        // dd($forms);
        // $filter_data = get_option( 'zgfm_listform_searchfilter', true );

        // $filter_data = true;

		// $data2 = array();
		// if ( empty( $filter_data ) ) {
		// 	$data2['per_page']   = intval( $this->per_page );
		// 	$data2['search_txt'] = '';
		// 	$data2['orderby']    = 'asc';
		// } else {
		// 	$data2['per_page']   = isset($filter_data['per_page'])?intval( $filter_data['per_page'] ):'5';
		// 	$data2['search_txt'] = isset($filter_data['search_txt'])?$filter_data['search_txt']:'';
		// 	$data2['orderby']    = isset($filter_data['orderby'])?$filter_data['orderby']:'';
		// }

		// $offset          = ( isset( $_GET['offset'] ) ) ? Uiform_Form_Helper::sanitizeInput( $_GET['offset'] ) : 0;
		
		// $data2['offset'] = $offset;

		// $form_data = Form::with('ListTotals')->get();

		// $data2['all'] = $form_data->r_all;
		// $data2['trash'] = $form_data->r_trash;
		// $data2['subcurrent'] = 1;

		// $data2['subsubsub'] = List_data::get()->subsubsub( $data2 );

		// $this->template->loadPartial( 'layout', 'forms/list_forms', $data2 );

        return view('form.index', compact('forms'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data            = array();
		$data['form_id'] = ( isset( $_GET['form_id'] ) && $_GET['form_id'] ) ? Uiform_Form_Helper::sanitizeInput( trim( $_GET['form_id'] ) ) : 0;
		$data['action']  = 'create_uiform';
		// return $data['obj_sfm'] = Uiform_Form_Helper::get_font_library();

		if ( intval( $data['form_id'] ) > 0 ) {

			$formdata = $this->model_forms->getFormById( $data['form_id'] );
			/*
			 * delete after a month
			$data['uifm_frm_record_tpl_enable']=$formdata->fmb_rec_tpl_st;
			$data['uifm_frm_record_tpl_content']=$formdata->fmb_rec_tpl_html;*/
		}
		// $data['addons_actions'] = self::$_addons_actions;

		$pdf_paper_size         = array(
			'4a0'                      => array( 0, 0, 4767.87, 6740.79 ),
			'2a0'                      => array( 0, 0, 3370.39, 4767.87 ),
			'a0'                       => array( 0, 0, 2383.94, 3370.39 ),
			'a1'                       => array( 0, 0, 1683.78, 2383.94 ),
			'a2'                       => array( 0, 0, 1190.55, 1683.78 ),
			'a3'                       => array( 0, 0, 841.89, 1190.55 ),
			'a4'                       => array( 0, 0, 595.28, 841.89 ),
			'a5'                       => array( 0, 0, 419.53, 595.28 ),
			'a6'                       => array( 0, 0, 297.64, 419.53 ),
			'a7'                       => array( 0, 0, 209.76, 297.64 ),
			'a8'                       => array( 0, 0, 147.40, 209.76 ),
			'a9'                       => array( 0, 0, 104.88, 147.40 ),
			'a10'                      => array( 0, 0, 73.70, 104.88 ),
			'b0'                       => array( 0, 0, 2834.65, 4008.19 ),
			'b1'                       => array( 0, 0, 2004.09, 2834.65 ),
			'b2'                       => array( 0, 0, 1417.32, 2004.09 ),
			'b3'                       => array( 0, 0, 1000.63, 1417.32 ),
			'b4'                       => array( 0, 0, 708.66, 1000.63 ),
			'b5'                       => array( 0, 0, 498.90, 708.66 ),
			'b6'                       => array( 0, 0, 354.33, 498.90 ),
			'b7'                       => array( 0, 0, 249.45, 354.33 ),
			'b8'                       => array( 0, 0, 175.75, 249.45 ),
			'b9'                       => array( 0, 0, 124.72, 175.75 ),
			'b10'                      => array( 0, 0, 87.87, 124.72 ),
			'c0'                       => array( 0, 0, 2599.37, 3676.54 ),
			'c1'                       => array( 0, 0, 1836.85, 2599.37 ),
			'c2'                       => array( 0, 0, 1298.27, 1836.85 ),
			'c3'                       => array( 0, 0, 918.43, 1298.27 ),
			'c4'                       => array( 0, 0, 649.13, 918.43 ),
			'c5'                       => array( 0, 0, 459.21, 649.13 ),
			'c6'                       => array( 0, 0, 323.15, 459.21 ),
			'c7'                       => array( 0, 0, 229.61, 323.15 ),
			'c8'                       => array( 0, 0, 161.57, 229.61 ),
			'c9'                       => array( 0, 0, 113.39, 161.57 ),
			'c10'                      => array( 0, 0, 79.37, 113.39 ),
			'ra0'                      => array( 0, 0, 2437.80, 3458.27 ),
			'ra1'                      => array( 0, 0, 1729.13, 2437.80 ),
			'ra2'                      => array( 0, 0, 1218.90, 1729.13 ),
			'ra3'                      => array( 0, 0, 864.57, 1218.90 ),
			'ra4'                      => array( 0, 0, 609.45, 864.57 ),
			'sra0'                     => array( 0, 0, 2551.18, 3628.35 ),
			'sra1'                     => array( 0, 0, 1814.17, 2551.18 ),
			'sra2'                     => array( 0, 0, 1275.59, 1814.17 ),
			'sra3'                     => array( 0, 0, 907.09, 1275.59 ),
			'sra4'                     => array( 0, 0, 637.80, 907.09 ),
			'letter'                   => array( 0, 0, 612.00, 792.00 ),
			'half-letter'              => array( 0, 0, 396.00, 612.00 ),
			'legal'                    => array( 0, 0, 612.00, 1008.00 ),
			'ledger'                   => array( 0, 0, 1224.00, 792.00 ),
			'tabloid'                  => array( 0, 0, 792.00, 1224.00 ),
			'executive'                => array( 0, 0, 521.86, 756.00 ),
			'folio'                    => array( 0, 0, 612.00, 936.00 ),
			'commercial #10 envelope'  => array( 0, 0, 684, 297 ),
			'catalog #10 1/2 envelope' => array( 0, 0, 648, 864 ),
			'8.5x11'                   => array( 0, 0, 612.00, 792.00 ),
			'8.5x14'                   => array( 0, 0, 612.00, 1008.0 ),
			'11x17'                    => array( 0, 0, 792.00, 1224.00 ),
		);
		$data['pdf_paper_size'] = $pdf_paper_size;

		// $data['fields_fastload'] = get_option( 'zgfm_fields_fastload', 0 );

		// $data['modules_tab_extension']= self::$_modules['addon']['backend']->addons_doActions('back_exttab_block');

		// $data['modules_tab_extension'] = modules::run( 'addon/zfad_backend/addons_doActions', 'back_exttab_block', true );

		// $this->template->loadPartial( 'layout-editform', 'forms/create_form', $data );
        return view('forms.create_form');
    }

    /**
     * @param \App\Http\Requests\FormStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormStoreRequest $request)
    {
        $form = Form::create($request->validated());

        $request->session()->flash('form.id', $form->id);

        return redirect()->route('form.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Form $form
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Form $form)
    {
        return view('form.show', compact('form'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Form $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Form $form)
    {
        return view('form.edit', compact('form'));
    }

    /**
     * @param \App\Http\Requests\FormUpdateRequest $request
     * @param \App\Models\Form $form
     * @return \Illuminate\Http\Response
     */
    public function update(FormUpdateRequest $request, Form $form)
    {
        $form->update($request->validated());

        $request->session()->flash('form.id', $form->id);

        return redirect()->route('form.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Form $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Form $form)
    {
        $form->delete();

        return redirect()->route('form.index');
    }
}
