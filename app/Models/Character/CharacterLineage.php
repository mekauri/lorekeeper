<?php

namespace App\Models\Character;

use App\Models\Model;

use App\Models\Character\Character;

class CharacterLineage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id',
        'sire_id',              'sire_name',
        'sire_sire_id',         'sire_sire_name',
        'sire_sire_sire_id',    'sire_sire_sire_name',
        'sire_sire_dam_id',     'sire_sire_dam_name',
        'sire_dam_id',          'sire_dam_name',
        'sire_dam_sire_id',     'sire_dam_sire_name',
        'sire_dam_dam_id',      'sire_dam_dam_name',
        'dam_id',               'dam_name',
        'dam_sire_id',          'dam_sire_name',
        'dam_sire_sire_id',     'dam_sire_sire_name',
        'dam_sire_dam_id',      'dam_sire_dam_name',
        'dam_dam_id',           'dam_dam_name',
        'dam_dam_sire_id',      'dam_dam_sire_name',
        'dam_dam_dam_id',       'dam_dam_dam_name',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character_lineages';

    // test
    private $unknown = "Unknown";

    /*
     * ASSOCIATING THE FAMILY CHARACTER MODELS
     */

    public function sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_sire_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_sire_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_dam_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function sire_dam_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_sire_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_sire_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_dam_sire()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    public function dam_dam_dam()
    {
        return $this->belongsTo('App\Models\Character\Character');
    }

    /*
     * Getting the Display URLs or Text
     */

    /**
     * Gets the display URL and/or of an ancestor, or "Unknown" if there is none
     * @param   string  $ancestor
     * @return  string
     */
    public function getDisplayName($ancestor)
    {
        if(isset($this[$ancestor.'_id']))
            return $this[$ancestor]->getDisplayNameAttribute();

        if(isset($this[$ancestor.'_name']))
            return $this[$ancestor.'_name'];
        
        return "Unknown";
    }
}
