<?php
function show_query_form() {
?>
            <form class="form-horizontal" id="query-form">
                <fieldset>
                    <div class="control-group" id="term-1">
                        <label class="control-label" for="term-1">Term 1</label>
                        <div class="controls">
                            <input type="text" name="term-1" placeholder="Term 1"><br>
                            <label class="radio inline">
                                <input type="radio" name="term-1-match" value="exact"> Exact match</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-1-match" value="broad" class="radiogroup-default"> Broad match</input>
                            </label><br>
                            <label class="radio inline">
                                <input type="radio" name="term-1-in" value="inurl"> inUrl</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-1-in" value="intitle"> inTitle</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-1-in" value="inanchor"> inAnchor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-1-in" value="inpostauthor"> inPostAuthor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-1-in" value="none" class="radiogroup-default"> None</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="term-2">
                        <label class="control-label" for="term-2">Term 2</label>
                        <div class="controls">
                            <input type="text" name="term-2" placeholder="Term 2"><br>
                            <label class="radio inline">
                                <input type="radio" name="term-2-match" value="exact"> Exact match</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-2-match" value="broad" class="radiogroup-default"> Broad match</input>
                            </label><br>
                            <label class="radio inline">
                                <input type="radio" name="term-2-in" value="inurl"> inUrl</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-2-in" value="intitle"> inTitle</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-2-in" value="inanchor"> inAnchor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-2-in" value="inpostauthor"> inPostAuthor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-2-in" value="none" class="radiogroup-default"> None</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="term-3">
                        <label class="control-label" for="term-3">Term 3</label>
                        <div class="controls">
                            <input type="text" name="term-3" placeholder="Term 3"><br>
                            <label class="radio inline">
                                <input type="radio" name="term-3-match" value="exact"> Exact match</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-3-match" value="broad" class="radiogroup-default"> Broad match</input>
                            </label><br>
                            <label class="radio inline">
                                <input type="radio" name="term-3-in" value="inurl"> inUrl</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-3-in" value="intitle"> inTitle</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-3-in" value="inanchor"> inAnchor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-3-in" value="inpostauthor"> inPostAuthor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="term-3-in" value="none" class="radiogroup-default"> None</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="filetype">
                        <label class="control-label" for="filetype">Filetype</label>
                        <div class="controls">
                            <input type="text" name="filetype" placeholder="Filetype">
                        </div>
                    </div>
                    <div class="control-group" id="tld">
                        <label class="control-label" for="tld">TLD</label>
                        <div class="controls">
                            <label class="radio inline">
                                <input type="radio" name="tld" value="com"> .com</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="tld" value="net"> .net</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="tld" value="org"> .org</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="tld" value="gov"> .gov</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="tld" value="edu"> .edu</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="tld" value="any" class="radiogroup-default"> No preference</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="negative-keywords">
                        <label class="control-label" for="negative-keywords">Negative keywords</label>
                        <div class="controls">
                            <input type="text" name="negative-keywords" placeholder="Separate with commas"><br />
                            <label class="radio inline">
                                <input type="radio" name="negative-match" value="exact"> Exact match</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="negative-match" value="broad" class="radiogroup-default"> Broad match</input>
                            </label><br>
                            <label class="radio inline">
                                <input type="radio" name="negative-in" value="inurl"> inUrl</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="negative-in" value="intitle"> inTitle</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="negative-in" value="inanchor"> inAnchor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="negative-in" value="inpostauthor"> inPostAuthor</input>
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="negative-in" value="none" class="radiogroup-default"> None</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group" id="andor">
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="andor" value="+"> Add + between terms?</input>
                            </label>
                            <label class="radio">
                                <input type="radio" name="andor" value="or"> Add OR between terms?</input>
                            </label>
                            <label class="radio">
                                <input type="radio" name="andor" value="none" class="radiogroup-default"> None</input>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="button" id="submit" class="btn btn-primary" onclick="getQuery();">Submit</button>
                            <button type="button" id="clear" class="btn btn-danger" onclick="clearForm();">Clear</button>
                        </div>
                    </div>
                </fieldset>
            </form>
<?php
}

function show_output_modal() {
?>
            <div id="output-modal" class="modal hide">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h3 id="output-modal-label">Generated Query</label>
                </div>
                <div class="modal-body">
                    <span id="query-output"></span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
<?php
}
