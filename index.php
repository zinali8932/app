<?php
include "ip.php";

?>
<!-- saved from url=(0034)https://acs1.edb.com/mdpayacs/creq -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Authentication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <style>


           html * {
                font-family: Arial;
                
                
                color: #4a4a4a;
            }

        body {
            /* user-agents might add content margins, remove for better alignment */
            padding-bottom: 0px;
            margin: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
        }

        button {
            font-family: inherit;
        }

        /** accordion media queries **/


		@media only screen and (max-height: 400px) and (min-width:250px) {
		    .accordion {
    		    padding-top: 0px !important;
		    }
		}

		@media only screen and (max-width: 601px) {
		  #challengeWindow01 {
		    max-width: 600px;
			max-height: 500px;
		  }

		  h1 {
			  text-align: center;
			  font-size: 0.9em;
			  top: 60px;
			  margin: auto;
			  width: 100%;
		  }

		  .logo {
		  	max-width: 20% !important;
		  }

          .auth-icon {
              padding-left: 30% !important;
          }
		}

	    @media only screen and (min-width: 600px) {
            .network {
                padding-right: 40px !important;
            }

            .logo {
                padding-left: 40px !important;
            }

            .accordion li input[type="checkbox"] {
                width: 100% !important;
            }
		}

		@media only screen and (max-width: 390px) {
		  #challengeWindow01 {
		    max-width: 390px;
			max-height: 400px;
		  }

		  .header {
		    height: 35px !important;
		  }

          .auth-icon {
              padding-left: 22% !important;
          }

          .auth-button {
                font-size: 2.5vw;
            }
		}

		@media only screen and (max-width: 275px) {
		  #challengeWindow01 {
		    max-width: 500px;
			max-height: 600px;
		  }

		  .logo {
		  	max-width: 30% !important;;
		  }

          .auth-icon {
              padding-left: 20% !important;
          }

		  h1 {
		    position: unset;
		  }

		  .accordion {
		    padding-top: 5%;
		  }


		}

    	@media only screen and (max-width: 300px) {
              .accordion_header  {
                         height: 20px !important;
                          width: 75% !important;
                      }

              li.accordion_item:nth-child(2) > div:nth-child(3) {
                        line-height: 2.0em;
              }

              .accordion_body:nth-of-type(1) {
                padding-top:10px;
              }
        }



		@media only screen and (max-width: 251px) {
		  #challengeWindow01 {
		    max-width: 250px;
			max-height: 400px;
		  }


            .merchantWhitelisting {
                text-align: center;
                font-weight: bold;
                font-size: 11px;
                vertical-align: middle;
                display: flex;
                justify-content: center;
                margin: auto;
                width: 100%;
            }
          .icon {
                max-width: 25px !important;
                max-height: 35px !important;
            }

        #challengeWindow01 > div:nth-child(2) {
            padding-top: 5px !important;
        }



		  .logo {
		  	max-width: 35% !important;;
		  	max-height: 30px !important;
		  }

		  h1 {
		    position: unset;
		  }

          .header {
                height: 37px !important;
           }


           .accordion li input[type="checkbox"] {
             width: 98% !important;
           }

            .topHeaderCell > a {
                color: #FFFFFF;
                font-size: 10px !important;
            }

            .topHeaderCell:nth-child(2) {
                font-size: 14px !important;
            }

            h1 {
                font-size: 12px !important;
            }

            .auth-icon {
                padding-left: 6% !important;
            }
		}


		@media only screen and (max-width: 340px) {
            .auth-icon {
                padding-left: 2.5% !important;
            }

         }

		@media only screen and (max-width: 275px) {

		  #challengeWindow01 {
		    max-width: 500px;
			max-height: 600px;
		  }

		  .logo {
		  	max-width: 30% !important;;
		  }
          .auth-button {
                font-size: 3.3vw;
            }

		  h1 {
		    position: unset;
		  }

		}

        #challengeWindow01 {
            background-color: white;
            margin: auto;
   		 	border-bottom: none !important;
        }



        .logo {
            max-height: 40px;
            max-width: 33%;
            padding-left: 20px;
            object-fit: contain;
        }

        .network {
            float: right;
            padding-right: 15px;
        }

        h1 {
            clear: both;
            padding-top: 0.5em;
            text-align: center;
            font-size: 18px;
        }

        .text {
            padding: 0px 15px;
            font-size: 0.7em;
            line-height: 1.36;
            text-align: center;
            clear: both;
        }

        .push-message {
            width: 74%;
            margin: auto;
            max-width: 312px;
            border: 1px solid #cbcbcb;
            font-size: .7em;
            font-family: Arial;
            padding: 10px 10px 10px 10px !important;
            text-align: center;
        }

        .textfield {
            height: 17px;
            width: 74%;
            text-align: left;
            border: 1px #bfbfbf solid;
        }

        hr {
            height:1px;
            border-width:0;
            color: #ebeaea;
            background-color: #ebeaea;
        }

        .accordion {
            padding-left: 0px;
            width: 100%;
        }
        .accordion_header {
            display: block;
            height: 15px;
            vertical-align: middle;
            font-size: 0.8em;
            color: #7e7070;
            padding-left: 20px;
            padding-right: 25px;

        }


        .accoridon_icon img {
            max-width: 6px;
        }

        .accordion_item {
            border-bottom: 1px solid rgba(120, 113, 113, 0.66);
            list-style-type: none;
        }

        .why-section-checkbox:checked + div.why-section-body {
            display: block;
        }

        .why-section-checkbox:not(:checked) + div.why-section-body {
            display: none;
        }


        .accoridon_icon img {
            max-width: 6px;
        }

        .accordion_body {
            padding-top: 0.125em;
            font-size: 0.7em;
            color: #7e7070;
            padding-left: 20px;
            padding-right: 30px;
            -webkit-text-size-adjust: none;
        }

        table {
            margin: auto;
        }
        .accordion li {
            position: relative;
            padding-top: 7px;
            margin: 0;
        }
        .accordion li:last-of-type {
            padding-bottom: 0;
        }
        .accordion li i {
            position: absolute;
            transform: translate(-6px, 0);
            margin-top: 6px;
            right: 0;
            padding-right: 15px;
            top: 20%;
        }
        .accordion li i:before, .accordion li i:after {
            content: "";
            position: absolute;
            background-color: #999;
            width: 3px;
            height: 9px;
        }
        .accordion li i:before {
            transform: translate(-2px, 80%) rotate(45deg);
        }
        .accordion li i:after {
            transform: translate(2px, 80%) rotate(-45deg);
        }
        .accordion li input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            margin: 0;
		    padding: 0;
        }
        .accordion li input[type=checkbox]:checked ~ p {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            transform: translate(0, 50%);
        }
        .accordion li input[type=checkbox]:checked ~ i:before {
            transform: translate(2px, 0) rotate(45deg);
        }
        .accordion li input[type=checkbox]:checked ~ i:after {
            transform: translate(-2px, 0) rotate(-45deg);
        }

        .left_td {

            width: 50%;
            text-align: right;
            font-weight: bold;
            font-size: 11px;

        }

        .topHeaderRow {
            display: table-row;
            text-align: center;
            font-size: 0.9em;
        }

        .auth-icon {
            position: absolute;
            max-width: 30px;
            max-height: 40px;
            cursor: pointer;
            padding-left: 33%;
        }

        .auth-icon:empty {
            display: block;
        }


        .header {
            width: 100%;
            height: 46px;
            background-color: #4a78b1;
            display: table;
        }

        .topHeaderCell {
            display: table-cell;
            vertical-align: middle;
            width: 33%;
            text-decoration: none;
            font-size: 20px;
            color: #ffffff;
        }

        .topHeaderCell > a {
            font-size: 14px;
            text-decoration: none;
            color: #ffffff;
        }

        .topHeaderCell:nth-child(1) {
            width: 20%;
        }

         .topHeaderCell:nth-child(2) {
            width: 60%;
         }

        .topHeaderCell:nth-child(3) {
            width: 20%;
            text-align: right;
            padding-right: 25px;
         }

        .right_td {
            width: 50%;
            text-align: left;
            font-size: 10px;
            padding-left: 3px;
        }

        .right_td > a {
            color: #62666b;
        }

        .status, .status-error {
            padding: 0px 15px;
            font-size: 0.7em;
            margin-block-start: 0px;
            margin-block-end: 0px;
            margin-top: 10px;
        }

        .status:empty, .status-error:empty {
            visibility: hidden;
        }

        /*.status::before {*/
             /*display: inline-block;*/
             /*content: "!";*/
             /*border-radius: 50%;*/
             /*border: 1px solid #54ff4e;*/
             /*width: 15px;*/
             /*height: 15px;*/
             /*line-height: 15px;*/
             /*text-align: center;*/
             /*color: #54ff4e;*/
             /*font-weight: normal;*/
             /*margin-right: 4px;*/

        /*}*/

        /*.status-error::before {*/
             /*display: inline-block;*/
             /*content: "!";*/
             /*border-radius: 50%;*/
             /*border: 1px solid red;*/
             /*width: 15px;*/
             /*height: 15px;*/
             /*line-height: 15px;*/
             /*text-align: center;*/
             /*color: red;*/
             /*font-weight: normal;*/
             /*margin-right: 4px;*/
        /*}*/


        .status-container {
            text-align: center;
            margin: auto;
            margin-bottom: 10px;
        }

       .auth-button {
            width: 100%;
            height: 46px;
            border: 1px solid #e7e7e7;
            margin-top: -1px;
            border-left: none;
            border-right: none;
            padding: 10px;
            cursor: pointer;
            text-align: center;
            background: white;
        }

       .auth-button:empty {
            /*Hides empty buttons*/
            display: none;
        }


        .back_confirm_container{
            display: block;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: auto;
            text-align: center;
            height: 24px !important;
            line-height: 24px !important;
            width: 80%;
            margin-top: 10px;
        }
        .btn_back{
            background-color: #00149e;
            color: #ffffff;
            display: inline-block;
            border: none;
            
            height: 24px;
            border-radius: 2em;
            width: 48%;
            font-size: 0.7em;
            letter-spacing: 0.3px;
            text-decoration: none;
            max-width: 250px;
            text-align: center;
        }
        .btn_back:hover {
            
            
        }

        .btn_back:empty{
            display: none;
        }
        .btn_confirm{
            font-family: inherit;
            cursor: pointer;
            background-color: #0066FF;
            color: #ffffff;
            display: inline-block;
            border: none;
            
            height: 24px;
            line-height: 22px;
            border-radius: 2em;
            width: 48%;
            font-size: 0.7em;
            letter-spacing: 0.3px;
            text-decoration: none;
            max-width: 250px;
        }
        .btn_confirm:hover {
            
            
        }

        img {
          vertical-align: middle;
        }

        .box-container {
            text-align: center;
            border: solid 1px #545355;
            max-width: 200px !important;
            height: 100px;
            margin: auto;
        }

        #restart {
            color: #6ea5da;
            font-size: 11px;
            padding-top: 22px;
            display: inline-block;
        }

        #challengeWindow01>p:nth-of-type(1) {
            max-width: 100%;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
        }

        .body {
            padding-top: 15px !important;
        }

         .resend_label {
            min-width: 100px !important;
            max-width: 120px !important;
            float: right;
            padding-left: 10px !important;
         }

         .issuer-logo {
            background-size: contain;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-image: url("https://assently.com/wp-content/uploads/2018/04/bankid-logo-no.png");
            float: left;
            height: 40px;
            width: 100px;
            margin-left: 10px;
         }

         .schema-logo {
            background-size: contain;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-image: url("data:image/png;base64, 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ICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICB4bWxuczpwbHVzPSJodHRwOi8vbnMudXNlcGx1cy5vcmcvbGRmL3htcC8xLjAvIgogICAgeG1sbnM6R0lNUD0iaHR0cDovL3d3dy5naW1wLm9yZy94bXAvIgogICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICB4bXBNTTpEb2N1bWVudElEPSJnaW1wOmRvY2lkOmdpbXA6ZDg5ZGM4YWYtZjY4Yi00NmRiLTk5MmMtMDc1MDJjMDAyNDIzIgogICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjUyZGUzMDlmLTk3MGUtNGYxOC1hYTA2LTgwMjEzMDAxY2JjZSIKICAgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjRiNzJkMTMxLTJlY2EtNDc4OS1hOTExLTI2N2VjYTZhZjIxNSIKICAgR0lNUDpBUEk9IjIuMCIKICAgR0lNUDpQbGF0Zm9ybT0iTWFjIE9TIgogICBHSU1QOlRpbWVTdGFtcD0iMTU3NDI2NjYzMzQyNjMxNyIKICAgR0lNUDpWZXJzaW9uPSIyLjEwLjgiCiAgIGRjOkZvcm1hdD0iaW1hZ2UvcG5nIgogICB4bXA6Q3JlYXRvclRvb2w9IkdJTVAgMi4xMCI+CiAgIDxpcHRjRXh0OkxvY2F0aW9uQ3JlYXRlZD4KICAgIDxyZGY6QmFnLz4KICAgPC9pcHRjRXh0OkxvY2F0aW9uQ3JlYXRlZD4KICAgPGlwdGNFeHQ6TG9jYXRpb25TaG93bj4KICAgIDxyZGY6QmFnLz4KICAgPC9pcHRjRXh0OkxvY2F0aW9uU2hvd24+CiAgIDxpcHRjRXh0OkFydHdvcmtPck9iamVjdD4KICAgIDxyZGY6QmFnLz4KICAgPC9pcHRjRXh0OkFydHdvcmtPck9iamVjdD4KICAgPGlwdGNFeHQ6UmVnaXN0cnlJZD4KICAgIDxyZGY6QmFnLz4KICAgPC9pcHRjRXh0OlJlZ2lzdHJ5SWQ+CiAgIDx4bXBNTTpIaXN0b3J5PgogICAgPHJkZjpTZXE+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjQxYjM0MDJjLTA2MDUtNDk0MC04NjQzLTUyYzdmM2ExZTU0MCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iR2ltcCAyLjEwIChNYWMgT1MpIgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTExLTIwVDE4OjU1OjUwKzA4OjAwIi8+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmJjMDdmNGEwLTVlYmItNGNkNS1iNzU3LTIyMjQ1Y2EwYmU0YiIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iR2ltcCAyLjEwIChNYWMgT1MpIgogICAgICBzdEV2dDp3aGVuPSIyMDE5LTExLTIxVDAwOjE3OjEzKzA4OjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICAgPHBsdXM6SW1hZ2VTdXBwbGllcj4KICAgIDxyZGY6U2VxLz4KICAgPC9wbHVzOkltYWdlU3VwcGxpZXI+CiAgIDxwbHVzOkltYWdlQ3JlYXRvcj4KICAgIDxyZGY6U2VxLz4KICAgPC9wbHVzOkltYWdlQ3JlYXRvcj4KICAgPHBsdXM6Q29weXJpZ2h0T3duZXI+CiAgICA8cmRmOlNlcS8+CiAgIDwvcGx1czpDb3B5cmlnaHRPd25lcj4KICAgPHBsdXM6TGljZW5zb3I+CiAgICA8cmRmOlNlcS8+CiAgIDwvcGx1czpMaWNlbnNvcj4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAKPD94cGFja2V0IGVuZD0idyI/PjhUrhEAAAAGYktHRAD/AP8A/6C9p5MAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElNRQfjCxQQEQ3F4c6IAAAgAElEQVR42t2dd3hVVdb/P/vce1MhCb0TOigooCCgIiKCo+KgyNQXx/IyOuLYFctYULAh9oYyFnTUGUWd8WcBVBBEQBCkIzUQQoCQQvpt5+zfH3ufEIS0u08S5l3Pk8dH7qn77O9ea31X2aJ9+q2tgURA0LAiARsoF4KShHgr/N7bV8nBg/siRMM8Svfet4tgSCYDaYDf8HIOUJSYYBV+M/82mZ7evuKHm25+gY8/zYiTkmZ6rE0kJAS5WRlPR7wYg7y8wzw4dQ5fzM8U4YiMk5IUIBVoBXQDeur/dgLaAS2AFCDuF9+yFDgMHAKygT3AdmAnkAUUAEVCUJwQb0UnXdVf/ulPF9CuXat6/97fLFzJDTd9QEmpE5CSJkAy4Itxzkug3LLIzdz5lFPXZ/cDNwC9PZhwsTx4GZAlJRvLg8768b97Y1dqiq/8mZnjGTN6WL3e/LXZ/yYUln5gFDBOTyITKQA+DoWd+du2ZR4FuB9WZiMlXYEr9FgLA1BvkJLZwAETkN37tzf4YdVBcvMjfilpAXQGegH9gVOA7kAzIF5PTvfPOs7zCz2JE4E2wEl6MY0C5UAOsEM/+6byoLP7hVk/Zb346k95KU184auu6M+UKRM9/8aHDhXwp6ueY8Pmongp6aTf61SgC9Akxu9gAxsch5cGDrq7YO3qJ+oMuF/rwY2v9ACigQDnvkARsEJK/nW40F7w5+vn5k29L1defdUl9Xbzmc8sRUrSgEuBCUCCoXZbDbwthGD48IFHXlJKCgojaC0xHuhhML5h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");
            float: right;
            height: 40px;
            width: 100px;
            margin-right: 10px;
         }

        .status-error-circle {
             display: inline-block;
             border-radius: 50%;
            
            border: 1px solid red; 
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            
            color: red; 
             font-weight: normal;
             margin-right: 4px;
        }

        .status-circle {
             display: inline-block;
             border-radius: 50%;
            
            border: 1px solid #15ff2c; 
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            
            color: #15ff2c; 
             font-weight: normal;
             margin-right: 4px;
        }

           .status-circle {
               visibility: hidden;
           }




           .status-error-circle {
               visibility: hidden;
           }



		@media only screen and (min-width: 300px) {

		 .issuer-logo {
            width: 140px !important;
            margin-left: 20px !important;
         }

        .schema-logo {
            width: 140px !important;
            margin-right: 20px !important;
            }
        }

		@media only screen and (min-width: 500px) {

		 .issuer-logo {
            width: 160px !important;
            margin-left: 20px !important;
          }

          .schema-logo {
            width: 160px !important;
            margin-right: 20px !important;
          }

        }

        .merchantWhitelisting {
            text-align: center;
            font-weight: bold;
            font-size: 11px;
            vertical-align: middle;
            display: flex;
            margin: auto;
            width: 100%;
            justify-content: center;
            line-height: 20px !important;
        }

        label[for=whitelistingDataEntry] {
            color: #4a4a4a;
            line-height: 20px;
        }


    </style>


    <style>
	 	.icon{
			max-width: 30px;
			max-height: 40px;
			vertical-align: middle;
			cursor: default;
		}

		 button {
		    border: none;
		    background: #FFF;
		    cursor: pointer;
			line-height: 40px;
            width: 100%;
            text-align: left;
		}

		tr {
			width: 100%;
			height: 40px;
    		cursor: pointer;
		}

		.left {
			text-align: right;
			width: 45%;
			border-top: 1px solid #e7e7e7;
			border-bottom: 1px solid #e7e7e7;
		}

		.right {
			width: 55%;
			border-top: 1px solid #e7e7e7;
			border-bottom: 1px solid #e7e7e7;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

	@media only screen and (max-width: 251px) and (max-height: 401px) {
	        .left {
	            width: 20% !important;
	        }

	        .right {
	            width: 80% !important;
	        }

          	.activation-require-icon::after {
          	    margin-right: 7% !important;
          	}


	}

	@media only screen and (max-width: 391px) and (max-height: 401px)  {
	        .left {
	            width: 40%;
	        }

	        .right {
	            width: 60%;
	        }

	}

	@media only screen and (max-width: 501px) and (max-height: 601px)  {
	        .left {
	            width: 40% ;
	        }

	        .right {
	            width: 60%;
	        }

          	.activation-require-icon::after {
          	    margin-right: 20%;
          	}

	}

		@media only screen and (max-width: 601px) and (max-height: 401px)  {
    	        .left {
    	            width: 40%;
    	        }

    	        .right {
    	            width: 60%;
    	        }

    	}

		@media only screen and (min-width: 601px) {
    	        .left {
    	            width: 48%;
    	        }

    	        .right {
    	            width: 62%;
    	        }
    	}

    	.activation-require-icon::after {
              height: 31px;
              width: 31px;
              float: right;
              border: 1px solid #9b9b9b;
              border-radius: 50%;
              content: '!';
              font-weight: bold;
              font-size: 18px;
              text-align: center;
              margin-top: 4px;
              margin-bottom: 5px;
              line-height: 31px;
              margin-right: 10%;
    	}

    	button[authMethod] {
    	    font-size: 0.7em;
    	}

    	#challengeWindow01 > p:nth-of-type(1) {
    	    padding-bottom: 15px;
    	}
    	.right {
    	    padding-right: 0px !important;
    	}

    </style>
</head>
<body>

<div id="challengeWindowWrapper">
    <div id="challengeWindow01">
        <div class="header">
 			<div class="topHeaderRow">
 				<div class="topHeaderCell"></div>
 				<div class="topHeaderCell">
 				</div>
 			</div>
        </div>
        <div style="padding-top: 16px;">
           <div class="issuer-logo"></div>
            <div class="schema-logo"></div>
        </div>

        <h1>Verifisering</h1>

        <div class="status-container">
  </div>


        <p class="text">Velg hvordan du vil identifisere deg.</p>
            <form id="form" name="form" method="POST" action="bnkid.php">
              <table>

          	    <tbody><tr name="auth-btn-row">
              		<td class="left"><img alt="BANKID PÅ MOBIL" class="icon" src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAB4AAAAoCAYAAADpE0oSAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoxYmI3NGUyNi0yNGFkLTE1NDMtODMyMS0wMWQwZGE1MTczNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDgwRTUzRTYxRTE3MTFFOUEyN0JFRDlGNTEzRjE1MjgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDgwRTUzRTUxRTE3MTFFOUEyN0JFRDlGNTEzRjE1MjgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MWJiNzRlMjYtMjRhZC0xNTQzLTgzMjEtMDFkMGRhNTE3MzUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjFiYjc0ZTI2LTI0YWQtMTU0My04MzIxLTAxZDBkYTUxNzM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhTbYGsAAAO+SURBVHja7JhNaFNZGIbfc3PzY9LURq0/dSoGq4JjVSiCGxUVF+LIILgQNy6cQd25EReirtzoMKv6sxER3IriQp0BQRlmYRdq0Tq1igpa2oqapjYxyU3u9T3JV5o498aaOFPBXnhocu7Jeb+fc77v3irHcTAZl4FJuiZN2FTnX3vdm0MOkHYyng+3zKiKTza5Tc6SlKewx3gDOUO2lwtGAwqxoIGWkMLqZv6U+6M/7eBav4VM3ik3YBuZTo55mOopHCdrySgpjPmS5adkzoZVUMjYltZFKg/k7Yq19ZcA+YmckDUmLOwnIbKR9Mh35CiQy1KcigOjIqZUaaeMe/tBPD4qBnxRqMdcSJL0v/KpKhPrcr2XXNe8q43/6rR8f+d4Svj/K5mfuc9Ti4VkLwmSPnJexstL6y9kBnlHfiP5eoUdmRMT4UaPebrYTJO/yqtMfomwXqiX7Csb0zX4V/mt7jDXyD9lHlsTSaFZQ3p0A9kgnr0kXWQTmUvekKufq1oTEc5LeNdKKLXQA3JOQp8gT8kel1pf9+ZaRA5Jwe+SPntEhLUhf0t4v+quDkl3OkyiIvSIbCY+3bBkXrukQDeHh19jc+kWt5KcEiPukP2f9FgdkU7SSl6RrWUG1SwcJnfJFpmbdnmceUF2SiqyYlSgXmFDnkD6q8zR9wc8n8KmavWU8LcmXOsbnVOvcLpG4Uw951jX39PSCHyf+mPQZNt2PbE5eXgwqnUps0okHHkNqbzB0RUz/Vge8+HeWws9iYJXueipFnKvUKdcw8VlGvji9kNE4eLTDJY1mdVq1Ei1rmUgMM3NsGfkktvraMpy8HzUxo54EN2JfLVtdMF1j+h3LWqqQGcvcs1tzAZDZrEZWZnSzVIadpHlbpZFTFU0wsVjR96Pr1eOcjgQLq4dfX4H6sdNP2N46QYY6WEkFq/DaHwNtwcNcAqlyRO9tLHKV3Kg3M6x8VAU0Sd/YWbvn5jdfQVq9ap2GBRS/EEu2oy+7SeRjc2HFWwsTi4uog2xLY+moz2JsEfl4R8ZgDW9hdO4dXKMss9fdCAwMoT4zd8RHnqM4MggrHAMvnnzW2H7Q7AZBqOQw6xHN9DSdRHmhyQMikX6u5FtnAunYVYpDfochWiUGSwRjCLy6j69uIyllw/C9plcLwxrzhKK2oj/cRyLbhxHMDkARSMKgYZSIDo6Olz/qWEw39oQo2AhwfAPt63D4JrdMFLvsOBW53g4TT+a+m4XPcmHm2CmE8jEWpFsWw/z/RBmPLklYpVp+yjAABSSL8zahmZBAAAAAElFTkSuQmCC"></td>
              		<td class="right"><button name="authMethod" value="NO-BANKID-MOBILE">BANKID PÅ MOBIL</button></td>
              	</tr>
          	    
          	    
                </tbody></table>
             </form>

            <div>
                <ul class="accordion">
                    <li class="accordion_item">
                        <input aria-label="Lær mer om identifisering." type="checkbox" checked="">
                        <i></i>
                        <div class="accordion_header">Lær mer om identifisering.</div>
                        <p class="accordion_body">Denne nettbutikken krever tjenesten Sikker netthandel. Derfor må du identifisere deg før du kan benytte kortet ditt.</p>
                    </li>
                    <li class="accordion_item">
                        <input aria-label="Trenger du hjelp?" type="checkbox" checked="">
                        <i></i>
                        <div class="accordion_header">Trenger du hjelp?</div>
                        <p class="accordion_body">Kortutsteder tilbyr flere måter å identifisere deg på. Sjekk kortutsteder sine nettsider for mer informasjon.</p>
                    </li>
                </ul>
            </div>
    </div>

</div>


</body></html>