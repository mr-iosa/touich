<input type="checkbox" class="input-popup-toggle-side" id="input-sidenav">
<div>
    <div class="zJFAR side-nav">
        <div class="cHunhC">
            <div class="dIRfla">
                <div class="lbkXOO hidden-scroll">
                    <div class="simplebar-track vertical" style="visibility: visible">
                        <div class="simplebar-scrollbar" style="top: 2px; height: 861px;"></div>
                    </div>
                    <div class="simplebar-track horizontal">
                        <div class="simplebar-scrollbar"></div>
                    </div>
                    <div class="simplebar-scroll-content" style="padding-bottom: 17px; padding-right: 17px;">
                        <div class="simplebar-content">
                            <div class="deMmmw collapse-toggle">
                                <div class="ktQueN">
                                    <button class="ffyxRu nHKTN has-label">
                                        <label for="input-sidenav">
                                            <div class="fbCCvx">
                                                <div class="cXxJjc">
                                                    <div class="kPofwJ">
                                                        <div class="ScAspectSpacer-sc-1sw3lwy-0 dsswUS"></div>
                                                        <svg width="100%" height="100%" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" class="ScIconSVG-sc-1bgeryd-1 ifdSJl"><g><path d="M16 16V4h2v12h-2zM6 9l2.501-2.5-1.5-1.5-5 5 5 5 1.5-1.5-2.5-2.5h8V9H6z"></path></g></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </button>
                                </div>
                            </div>
                            <div class="side-bar-contents">
                                <nav>
                                    <div>
                                        <div class="aleoz">
                                            <div class="cIfBon">
                                                <div class="hbYWXo">
                                                    <h2 class="ezafKb only-full">Cha&icirc;nes suivies</h2>
                                                </div>
                                                <div class="ktQueN only-reduced">
                                                    <div class="lmaGbJ">
                                                        <figure class="kYSkP">
                                                            <svg type="color-fill-current" width="20px" height="20px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" class="jxWtmu">
                                                                <g>
                                                                    <path fill-rule="evenodd" d="M9.171 4.171A4 4 0 006.343 3H6a4 4 0 00-4 4v.343a4 4 0 001.172 2.829L10 17l6.828-6.828A4 4 0 0018 7.343V7a4 4 0 00-4-4h-.343a4 4 0 00-2.829 1.172L10 5l-.829-.829zm.829 10l5.414-5.414A2 2 0 0016 7.343V7a2 2 0 00-2-2h-.343a2 2 0 00-1.414.586L10 7.828 7.757 5.586A2 2 0 006.343 5H6a2 2 0 00-2 2v.343a2 2 0 00.586 1.414L10 14.172z" clip-rule="evenodd"></path>
                                                                </g>
                                                            </svg>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <input type="checkbox" class="input-toggle" name="input-follow" id="input-follow">
                                                <div class="ftYHa-d">
                                                    <?php
                                                        foreach($sideBar['follow'] as $value) {
                                                    ?>    
                                                    <div class="dpqRKW">
                                                        <div>
                                                            <div class="fcPbos">
                                                                <a class="hqHHYw cmQKL side-nav-card__link" href="/">
                                                                    <div class="kZFVrV">
                                                                        <figure class="dncwPH">
                                                                            <img class="iDjrEF" src="assets/img/<?php echo $value['icon']; ?>">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="blhocS">
                                                                        <div class="bGPqDX">
                                                                            <div class="gcwIMz">
                                                                                <p class="gYupEs emHXNr"><?php echo $value['name']; ?></p>
                                                                            </div>
                                                                            <div class="bXhxYI">
                                                                                <p class="ciPVTQ"><?php echo $value['game']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="iiA-dIp side-nav-card__live-status">
                                                                            <div class="gcwIMz">
                                                                                <div class="dtUsEc"></div>
                                                                                <div class="gtLBqE">
                                                                                    <span class="iUznyJ"><?php echo $value['viewer']; ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <div class="eUXBRI side-nav-show-more-toggle__button only-full">
                                                    <button class="gBLUEB button-with-label">
                                                        <span class="hGjPna"><label class="label-button" for="input-follow">Afficher plus</label></span>
                                                        <span class="hGjPna"><label class="label-button" for="input-follow">Afficher moins</label></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="cIfBon">
                                                <div class="hbYWXo only-full">
                                                    <h2 class="ezafKb">Cha&icirc;nes recommand&eacute;es</h2>
                                                </div>
                                                <div class="ktQueN only-reduced">
                                                    <div class="lmaGbJ">
                                                        <figure class="kYSkP">
                                                            <svg type="color-fill-current" width="20px" height="20px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" class="jxWtmu">
                                                                <g>
                                                                    <path fill-rule="evenodd" d="M12.002 3.999a2 2 0 012 2v2L18 6v8l-3.998-2v2a2 2 0 01-2 1.999h-8a2 2 0 01-2-2V6a2 2 0 012-2h8zM12 6H4v8h8V6z" clip-rule="evenodd"></path>
                                                                </g>
                                                            </svg>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <input type="checkbox" class="input-toggle" name="input-reco" id="input-reco">
                                                <div class="ftYHa-d">
                                                    <?php
                                                        foreach($sideBar['reco'] as $value) {
                                                    ?>    
                                                    <div class="dpqRKW">
                                                        <div>
                                                            <div class="fcPbos">
                                                                <a class="hqHHYw cmQKL side-nav-card__link" href="/">
                                                                    <div class="kZFVrV">
                                                                        <figure class="dncwPH">
                                                                            <img class="iDjrEF" src="assets/img/<?php echo $value['icon']; ?>">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="blhocS">
                                                                        <div class="bGPqDX">
                                                                            <div class="gcwIMz">
                                                                                <p class="gYupEs emHXNr"><?php echo $value['name']; ?></p>
                                                                            </div>
                                                                            <div class="bXhxYI">
                                                                                <p class="ciPVTQ"><?php echo $value['game']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="iiA-dIp side-nav-card__live-status">
                                                                            <div class="gcwIMz">
                                                                                <div class="dtUsEc"></div>
                                                                                <div class="gtLBqE">
                                                                                    <span class="iUznyJ"><?php echo $value['viewer']; ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <div class="eUXBRI side-nav-show-more-toggle__button only-full">
                                                    <button class="gBLUEB button-with-label">
                                                        <span class="hGjPna"><label class="label-button" for="input-reco">Afficher plus</label></span>
                                                        <span class="hGjPna"><label class="label-button" for="input-reco">Afficher moins</label></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="cIfBon">
                                                <div class="hbYWXo only-full">
                                                    <h2 class="ezafKb">Les spectateurs de LittleBigWhale regardent aussi</h2>
                                                </div>
                                                <div class="ktQueN only-reduced">
                                                    <div class="lmaGbJ">
                                                        <figure class="kYSkP">
                                                            <svg type="color-fill-current" width="20px" height="20px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" class="jxWtmu">
                                                                <g>
                                                                    <path fill-rule="evenodd" d="M12.002 3.999a2 2 0 012 2v2L18 6v8l-3.998-2v2a2 2 0 01-2 1.999h-8a2 2 0 01-2-2V6a2 2 0 012-2h8zM12 6H4v8h8V6z" clip-rule="evenodd"></path>
                                                                </g>
                                                            </svg>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <input type="checkbox" class="input-toggle" name="input-too" id="input-too">
                                                <div class="ftYHa-d">
                                                    <?php
                                                        foreach($sideBar['also'] as $value) {
                                                    ?>    
                                                    <div class="dpqRKW">
                                                        <div>
                                                            <div class="fcPbos">
                                                                <a class="hqHHYw cmQKL side-nav-card__link" href="/">
                                                                    <div class="kZFVrV">
                                                                        <figure class="dncwPH">
                                                                            <img class="iDjrEF" src="assets/img/<?php echo $value['icon']; ?>">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="blhocS">
                                                                        <div class="bGPqDX">
                                                                            <div class="gcwIMz">
                                                                                <p class="gYupEs emHXNr"><?php echo $value['name']; ?></p>
                                                                            </div>
                                                                            <div class="bXhxYI">
                                                                                <p class="ciPVTQ"><?php echo $value['game']; ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="iiA-dIp side-nav-card__live-status">
                                                                            <div class="gcwIMz">
                                                                                <div class="dtUsEc"></div>
                                                                                <div class="gtLBqE">
                                                                                    <span class="iUznyJ"><?php echo $value['viewer']; ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                                <div class="eUXBRI side-nav-show-more-toggle__button only-full">
                                                    <button class="gBLUEB button-with-label">
                                                        <span class="hGjPna"><label class="label-button" for="input-too">Afficher plus</label></span>
                                                        <span class="hGjPna"><label class="label-button" for="input-too">Afficher moins</label></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>