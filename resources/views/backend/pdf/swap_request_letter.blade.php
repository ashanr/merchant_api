<html>

<head>
    <style type="text/css">
        /* Common table */
        .rTable {
            display: table;
            width: 100%;
        }

        h2,
        h3 {
            text-align: center;
            color: red;
            padding: 3px;
            font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
        }

        /* Form headers */
        h5 {
            background-color: #008000;
            color: white;
            padding: 3px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .border {
            background-color: #008000;
            padding: 15px;
            margin-bottom: auto;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11px;
        }

        .line {
            height: auto;
            padding: 10px;
            border: 5px solid green;
        }

        p.intro {
            text-align: center;
            font-style: italic;
        }

        p.instruction {
            font-weight: bold;
            margin-left: 15em
        }

        /* Signature */
        .middle {
            margin: auto;
            width: 60%;
            border: 1px solid black;
            padding: 30px;
            font-weight: bold;
            color: black;
        }

        /*Signature Box */
        .divSignature {
            float: left;
            /* display: block; */
            /* display: table-column; */
            margin-left: 20%;
            width: 30%;
            font-family: Arial, Helvetica, sans-serif;
        }

        .divSignature_one {
            float: left;
            /* display: block; */
            /* display: table-column; */
            margin-left: 20%;
            width: 30%;
            font-family: Arial, Helvetica, sans-serif;
        }

        .divSignature_two {
            float: left;
            /* display: block; */
            /* display: table-column; */
            /* margin-left: 30%; */
            width: 30%;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Signatiure Box */
        .divSignature2 {
            float: left;
            /* display: block; */
            /* display: table-column; */
            width: 90%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        /* print the date of declaration section */
        .rDateCell {
            display: table-column;
            float: left;
            height: 15px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 3px 1.8%;
            width: 10%;
            font-size: 13px;
        }

        /* Common table row */
        .rTableRow {
            display: table-row;
            font-size: 11px;
            font-family: Arial, Helvetica, sans-serif;
            height: auto;
            overflow: hidden;
            position: relative;
            clear: both;
        }



        /* Table normal row column width 20% borderless */
        .tr-col-w20-hAuto-borderless {
            display: table-cell;
            float: left;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: 20%;
            text-align: left;
        }

        .tr-col-w20-hAuto-borderless-end {
            display: table-cell;
            float: right;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: calc(20%);
            text-align: right;
        }

        /* Table normal row column width 32% borderless */
        .tr-col-w32-hAuto-borderless {
            display: table-cell;
            float: left;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: 32%;
            text-align: left;
        }

        .tr-col-w32-hAuto-borderless-end {
            display: table-cell;
            float: right;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: calc(32%);
            text-align: right;
        }

        /* Table normal row column width 45% borderless */
        .tr-col-w45-hAuto-borderless {
            display: table-cell;
            float: left;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: 45%;
            text-align: left;
        }

        .tr-col-w45-hAuto-borderless-end {
            display: table-cell;
            float: right;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: calc(45%);
            text-align: right;
        }

        /* Table normal row column width 60% borderless */
        .tr-col-w60-hAuto-borderless {
            display: table-cell;
            float: left;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: 60%;
            text-align: left;
        }

        .tr-col-w60-hAuto-borderless-end {
            display: table-cell;
            float: right;
            height: auto;
            overflow: hidden;
            padding: 3px;
            width: calc(60%);
            text-align: right;
        }


        /** Table Head Column W2 H30 **/
        .th-col-w2 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 4%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W5 H60 **/
        .th-col-w5-H60 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 80px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 5%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W7 H30 **/
        .th-col-w7 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 7%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W10 H30 **/
        .th-col-w5 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 5%;
            font-size: 11px;
            padding: 5px;
            text-align: center;
        }

        /** Table Head Column W10 H30 **/
        .th-col-w10 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 10%;
            font-size: 11px;
            padding: 5px;
            text-align: center;
        }

        /** Table Head Column W10 H60 **/
        .th-col-w10-h60 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 80px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 10%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W10 H45 **/
        .th-col-w10-h45 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 45px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 10%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W10 H30 END **/
        .th-col-w10-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(10%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W12 H30 **/
        .th-col-w12 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 3px 1.8%;
            width: 12%;
            font-size: 11px;
        }

        /** Table Head Column W13 H30 **/
        .th-col-w13 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 13%;
            font-size: 11px;
            padding: 5px;
            text-align: center;
        }

        /** Table Head Column W15 H30 **/
        .th-col-w15 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 3px 1.8%;
            width: 15%;
            font-size: 11px;
        }

        /** Table Head Column W15 H30 END **/
        .th-col-w15-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(15%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W18 H30 **/
        .th-col-w18 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 18%;
            font-size: 11px;
            padding: 5px;
            text-align: center;
        }

        /** Table Head Column W18 H30 END **/
        .th-col-w18-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(18%);
            font-size: 11px;
            text-align: center;
            padding: 5px;
        }

        /** Table Head Column W25 H30 **/
        .th-col-w25 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 25%;
            font-size: 11px;
            padding: 5px;
        }
        .th-col-w25-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(25%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W28 H30 **/
        .th-col-w28 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 18%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W28 H60 **/
        .th-col-w28-h60 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 60px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 28%;
            font-size: 11px;
            font-weight: bold;
            padding: 5px;
        }

        /** Table Head Column W35 H60 **/
        .th-col-w35-h60 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 80px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 35%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W36 H30 **/
        .th-col-w36 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 36%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W36 H30 END **/
        .th-col-w36-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(36%);
            font-size: 11px;
            padding: 5px;
        }

        .th-col-w40 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 40%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W28 H45 **/
        .th-col-w28-h45 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 45px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 28%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W32 H45 END **/
        .th-col-w32-h45-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 45px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(32%);
            font-size: 11px;
            padding: 5px;
        }

        .th-col-w30 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 30%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W42 H30 **/
        .th-col-w42 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 42%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W45 H60 END **/
        .th-col-w45-h60-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 80px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(45%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W50 H30 END **/
        .th-col-w50 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 50%;
            font-size: 11px;
            padding: 5px;
        }
        /** Table Head Column W50 H30 END **/
        .th-col-w50-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(50%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W58 H30 **/
        .th-col-w58 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 58%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W71 H30 **/
        .th-col-w71 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 71%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W78 H30 **/
        .th-col-w78 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 5px;
            width: 78%;
            font-size: 11px;
        }

        /** Table Head Column W90 H30 END **/
        .th-col-w90-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(90%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W100 H30 END **/
        .th-col-w100-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(100%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W2 H30 **/
        .tr-col-w2 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 4%;
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W5 H30 **/
        .tr-col-w5 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 5%;
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W5 H30 */
        .tr-col-w10 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 5%;
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W10 H30 */
        .tr-col-w13 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 13%;
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W10 H30 END */
        .tr-col-w10-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(10%);
            font-size: 11px;
            padding: 5px;
        }


        /* Table Normal Column W12 H30 */
        .tr-col-w12 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 3px 1.8%;
            width: 12%;
            font-size: 11px;
        }

        /* Table Normal Column W15 H30 */
        .tr-col-w15 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 3px 1.8%;
            width: 15%;
            font-size: 11px;
        }

        /* Table Normal Column W15 H30 END */
        .tr-col-w10-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(15%);
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W18 H30 */
        .tr-col-w18 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 18%;
            text-align: right;
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W18 H30 END */
        .tr-col-w18-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(18%);
            font-size: 11px;
            padding: 5px;
            text-align: right;
        }



        /* Table Normal Column W18 H60 */
        .tr-col-w18-h60 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 60px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 18%;
            font-size: 11px;
            padding: 5px;
        }

        /* Table Normal Column W18 H60 END */
        .tr-col-w18-h60-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 60px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(18%);
            font-size: 11px;
            text-align: right;
            padding: 5px;
        }

        /* Table Normal Column W22 H30 */
        .tr-col-w22 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 5px;
            width: 22%;
            font-size: 11px;
        }

        /* Table Normal Column W22 H30 END */
        .tr-col-w22-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(22%);
            font-size: 11px;
            padding: 5px;
            text-align: right;
        }

        /* Table Normal Column W25 H30 END */
        .tr-col-w25 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 25%;
            font-size: 11px;
            padding: 5px;
            text-align: right;
        }


        /* Table Normal Column W28 H30 */
        .tr-col-w28 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            padding: 5px;
            width: 28%;
            font-size: 11px;
        }

        /* Table Normal Column W32 H30 END */
        .tr-col-w32-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(32%);
            font-size: 11px;
            padding: 5px;
        }

        /** Table Head Column W35 H30 **/
        .tr-col-w35 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 35%;
            font-size: 11px;
            padding: 5px;
        }


        /* Table Normal Column W40 H30 */
        .tr-col-w40 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 40%;
            font-size: 11px;
            padding: 5px;
        }

        .tr-col-w30 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: 30%;
            font-size: 11px;
            padding: 5px;
        }

        .tr-col-w50 {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(50%);
            font-size: 11px;
            padding: 5px;
        }

        .tr-col-w50-end {
            display: table-cell;
            border: .5px solid #999999;
            float: left;
            height: 30px;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            width: calc(50%);
            font-size: 11px;
            padding: 5px;
        }

        /*print light color for table headers*/
        .rTableHead,
        .rPersonalHead,
        .rPersonalHead1,
        .rPersonalHead2,
        .rPersonalHead3,
        .rPersonalDetailHead,
        .rNomineeHead1,
        .rNomineeDetails,
        .rPolicyHead,
        .rBenefitHead1,
        .rFamilyH,
        .rHabitsHead,
        .rHabitsHead1,
        .rHabitsHead2,
        .rHealthHead1,
        .rHealthHead2,
        .rChildHead1,
        .rChildHead2,
        .rOfficeHead,
        .rCommonHead,
        .rNomineeHead3,
        .rApplicableHead,
        .rMethodHead,
        .rDetailsHead,
        .mergedFamily,
        .th-col1-personal-details,
        .th-col2-personal-details,
        .th-col3-personal-details,
        .tr-col3-split1-personal-details,
        .th-col-q-personal-details,
        .th-col-a1-personal-details,
        .th-col-a2-personal-details,
        .th-col1-doc-details,
        .th-col2-doc-details,
        .th-col3-doc-details,
        .th-col-w10-end,
        .th-col-w15-end,
        .th-col-w10,
        .th-col-w12,
        .th-col-w13,
        .th-col-w5,
        .th-col-w15,
        .th-col-w25,
        .th-col-w30,
        .th-col-w40,
        .th-col-w15-child,
        .rHabitsHead2-end,
        .rBenefitHead12,
        .th-col-w8,
        .th-col-w3-family,
        .th-col-w9-family,
        .th-col-w9-family-end,
        .th-col-w46-end,
        .th-col-w23 {
            background-color: #ddd;
            font-weight: bold;
        }

        .small-txt {
            font-size: 9px;
            margin: 0px
        }

        .footer {
            bottom: 0;
            color: #000;
            padding-top: 3mm;
            padding-bottom: 5mm;
        }

    </style>
</head>

<body>
    <!-- TO DO -->
    <div class="rTable">
        <div class="rTableRow">
            <div class="th-col-w25">Swap Request ID: &nbsp; {{$swapRequestData['swap_request_id']}}</div>
            <div class="th-col-w50">Company Name : &nbsp;{{$swapRequestData['company_name']}}  </div>
            <div class="th-col-w25-end"> Created at : {{$swapRequestData['swap_request']['created_at']}} </div>

        </div>
        <div class="rTableRow">

        </div>
    </div>


    <div class="rTable">
        <div class="rTableRow">
            <div class="th-col-w5">NO</div>
            <div class="th-col-w13">NIC</div>
            <div class="th-col-w40">Candidate Name</div>
            <div class="th-col-w25">Previous Company</div>
            <div class="th-col-w10-end">Status</div>
        </div>
    </div>

    <div class="rTable">
        <?php
        $count = 0;
        foreach ($swapRequestData['swap_list'] as $item) {
        $count += 1; ?>
        <div class="rTableRow">
            <div class="tr-col-w5"> {{ $count }} </div>
            <div class="tr-col-w13">{{ $item['nic'] }} </div>
            <div class="tr-col-w40">{{ $item['candidate_name'] }}</div>
            <div class="tr-col-w25">{{ $item['previous_company'] }}</div>
            <?php if ($item['status'] == 0) { ?>
            <div class="tr-col-w10-end"> Document Pending</div>
            <?php } elseif ($item['status'] == 1) { ?>
            <div class="tr-col-w10-end"> Pending Review</div>
            <?php } elseif ($item['status'] == 2) { ?>
            <div class="tr-col-w10-end"> SLII Reviewed</div>
            <?php } ?>
        </div>
        <?php
        }
        ?>
    </div>
    </div>

</body>

</html>
