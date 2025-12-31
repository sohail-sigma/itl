<?php 
class Cms69328f8aaff33117075681_f80e6e2f651a22614f65bcc7736bdadfClass extends Cms\Classes\PartialCode
{
public function onEnd()
{
    

    $query = San\San\Models\Packages::query();

    if (get('experience') != 'any') {
        $e_ids = array();
        $exp_id = San\San\Models\Destinations::select('id')->where('status', 1)->where('slug', get('experience'))->first();
        if ($exp_id) {
            $p_ids = DB::table('destinations_packages')->select('packages_id')->where('destinations_id', $exp_id->id)->get();
            foreach ($p_ids as $ids) {
                $e_ids[] = $ids->packages_id;
            }
        }
        // echo "<pre>";print_r($e_ids);die;
        $query->whereIn('id', $e_ids);

    }
    if (get('package') != 'any') {
        $p_ids = array();
        $s_pack = san\San\Models\Packages::where('countries', 'like', '%' . get('package') . '%')->get();
        foreach ($s_pack as $all_p) {
            $p_ids[] = $all_p->id;
        }
        
        $query->whereIn('id', $p_ids);
    }
    if (get('month') != 'any') {
        $m_ids = array();
        $with_month_id = San\San\Models\Packages::query()->select('id')->where('status', 1)->where('months', 'like', '%' . get('month') . '%')->get();
        foreach ($with_month_id as $with_month) {
            $m_ids[] = $with_month->id;
        }
        // echo "<pre>";echo get('month')."<br>";print_r($m_ids);die;
        $query->whereIn('id', $m_ids);
    }

    $query->where('status', 1)->paginate(10);
    $this['searchList'] = $query->get();
    
    // Pass country name to template for filtering
    $this['countryName'] = isset($_SESSION['countryName']) ? $_SESSION['countryName'] : '';
}
}
