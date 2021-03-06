<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2016-2019 Jason A. Everling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

namespace Jenzabar\Sonis\Api;

/**
 * Class program
 *
 * Sonis API Framework
 *
 * Component: program.cfc
 *
 * Usage: Program related, mainly for applicants
 *
 * @file Program.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class Program
{

    /**
     * The Sonis component to call
     *
     * @var string $comp
     */
    public static $comp = 'program';

    /**
     * Search for a program
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function appProgramSearch($soc_sec)
    {
        $comp = self::$comp;
        $method = 'approgsearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Complete an application
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function appComplete($soc_sec)
    {
        $comp = self::$comp;
        $method = 'complete_app';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Delete a program record
     *
     * @param $app_rid
     * @return array
     */
    public static function appProgramDelete($app_rid)
    {
        $comp = self::$comp;
        $method = 'delete_approg';
        $returns = 'yes';
        $params = [
            ['app_rid', $app_rid]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Insert a program record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $camp_cod The person's campus, in the form of the code
     * @param string $entry_date
     * @param string $prg_cod Program code
     * @param string $div_cod The person's division, in the form of the code
     * @param string $app_date
     * @param string $ack_date
     * @param string $trans_date
     * @param string $is_applicant
     * @param string $preferred The persons preferred address, yes or no
     * @param string $incomplete
     * @param string $app_rid
     * @param string $ref_source
     * @param string $fee_rec
     * @param string $apfee_dt
     * @param string $prior_app
     * @param string $app_yr
     * @param string $acknowledg
     * @param string $sms_trans
     * @param string $matric_fee
     * @param string $degree_ap Degree applied
     * @param string $degree_ac Degree accepted
     * @param string $major_ap
     * @param string $major_ac
     * @param string $time_maint
     * @param string $date_maint
     * @param string $trans_done
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @param string $d_soc_sec The objects unique identifier
     * @return array
     */
    public static function insertAppProgram(
        $soc_sec,
        $camp_cod,
        $entry_date,
        $prg_cod,
        $div_cod,
        $app_date,
        $ack_date,
        $trans_date,
        $is_applicant,
        $preferred,
        $incomplete,
        $app_rid,
        $ref_source,
        $fee_rec,
        $apfee_dt,
        $prior_app,
        $app_yr,
        $acknowledg,
        $sms_trans,
        $matric_fee,
        $degree_ap,
        $degree_ac,
        $major_ap,
        $major_ac,
        $time_maint,
        $date_maint,
        $trans_done,
        $operator,
        $d_soc_sec = ''
    ) {
        $comp = self::$comp;
        $method = 'insert_approg';
        $returns = 'yes';
        $params = [
            ['d_soc_sec', $d_soc_sec],
            ['soc_sec', $soc_sec],
            ['app_rid', $app_rid],
            ['prg_cod', $prg_cod],
            ['ref_source', $ref_source],
            ['fee_rec', $fee_rec],
            ['apfee_dt', $apfee_dt],
            ['prior_app', $prior_app],
            ['app_yr', $app_yr],
            ['div_cod', $div_cod],
            ['camp_cod', $camp_cod],
            ['app_date', $app_date],
            ['entry_date', $entry_date],
            ['incomplete', $incomplete],
            ['acknowledg', $acknowledg],
            ['ack_date', $ack_date],
            ['sms_trans', $sms_trans],
            ['trans_date', $trans_date],
            ['matric_fee', $matric_fee],
            ['degree_ap', $degree_ap],
            ['degree_ac', $degree_ac],
            ['major_ap', $major_ap],
            ['major_ac', $major_ac],
            ['time_maint', $time_maint],
            ['date_maint', $date_maint],
            ['trans_done', $trans_done],
            ['operator', $operator],
            ['is_applicant', $is_applicant],
            ['preferred', $preferred]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Prevent repeats update
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $prg_cod Program code
     * @return array
     */
    public static function preventRepeats($soc_sec, $prg_cod)
    {
        $comp = self::$comp;
        $method = 'preventrepeats';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['prg_cod', $prg_cod],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Search for a program
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function programSearch($soc_sec)
    {
        $comp = self::$comp;
        $method = 'programSearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }
}
