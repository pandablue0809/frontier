<?php get_header()?>

<div class="p-main" id="contact">
        <div class="p-nav">
            <div class="__container">
                <a href="#">Home &nbsp;&nbsp;&nbsp; ></a>
                <a href="#">お問い合わせ</a>
            </div>
        </div>
        <div class="p-pagettl">
            <div class="__container">

                <p class="en-ttl wow fadeInUp">
                    CONTACT
                </p>
                <h3 class="jp-ttl wow fadeInUp">
                    お問い合わせ
                </h3>
                <figure class="__absolute wow fadeInRight is-pc">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img-ttl.png" alt="">
                </figure>
                <figure class="__absolute wow fadeInRight is-sp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/real_estate/img-absoulute@2x.png" alt="">
                </figure>
            </div>
        </div>

        <div class="p-intro">
            <div class="__intro-ctn wow fadeInLeft">
                <p>ご質問やご不明点がございましたら、こちらからお気軽にお問い合わせください。
                </p>
            </div>
        </div>

        <div class="p-contact">
            <div class="__container">
                <div class="__form">
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed isnt">
                                任意
                            </div>
                            <p class="__item-ttl">
                                お問い合わせ種別
                            </p>
                        </div>
                        <div class="__item-input">
                            <select name="contact_type" id="">
                                <option value="">選択してください</option>
                                <option value="">選択してください</option>
                                <option value="">選択してください</option>
                                <option value="">選択してください</option>
                            </select>
                        </div>
                    </div>
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed is">
                                必須
                            </div>
                            <p class="__item-ttl">
                                お名前
                            </p>
                        </div>
                        <div class="__item-input">
                            <input type="text" placeholder="姓">
                            <input type="text" placeholder="名">
                        </div>
                    </div>
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed isnt">
                                任意
                            </div>
                            <p class="__item-ttl">
                                会社名
                            </p>
                        </div>
                        <div class="__item-input">
                            <input type="text" placeholder="株式会社フロンティアグループ">
                        </div>
                    </div>
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed is">
                                必須
                            </div>
                            <p class="__item-ttl">
                                電話番号
                            </p>
                        </div>
                        <div class="__item-input __reverse">
                            <input type="text" placeholder="0901234567">
                            <p class="star">※ハイフンなしでご入力ください</p>
                        </div>
                    </div>
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed is">
                                必須
                            </div>
                            <p class="__item-ttl">
                                メールアドレス
                            </p>
                        </div>
                        <div class="__item-input">
                            <input type="text" placeholder="info@frontiergroup.com">
                        </div>
                    </div>
                    <div class="__form-item wow fadeInUp">
                        <div class="__form-type">
                            <div class="__isneed isnt">
                                任意
                            </div>
                            <p class="__item-ttl">
                                相談内容
                            </p>
                        </div>
                        <div class="__item-input">
                            <textarea placeholder="相諵内容をご入力ください"></textarea>
                        </div>
                    </div>

                    <div class="__form-item wow fadeInUp __reverse">
                        <p class="agree">
                            プライバシーポリシーに同意の上、<br class="is-sp">送信してください
                        </p>
                        <div class="__agree">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="agree" id="agree" hidden>
                                <span class="checkmark"></span>
                                プライバシーポリシーに同意する
                            </label>
                        </div>

                    </div>
                    <a href="#" class="submit wow fadeInUp">
                        送信する
                        <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_4594)">
                                <path d="M7.5 12H28.5L22.5 8" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_4594">
                                    <rect width="36" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="p-download">
            <div class="__container">
                <h3 class="__download-ttl">
                    財務サマリー
                </h3>
                <div class="__download-main">
                    <div class="__download-items">
                        <idv class="__download-item wow fadeIn">
                            <h4 class="__item-ttl">
                                賃貸契約について
                            </h4>
                            <div class="__item-lists">
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            賃貸契約＿新規申込書
                                        </h5>
                                        <p class="__list-desc">
                                            賃貸物件の入居申込に必要な情報を記入する申込書です。 <br>氏名や連絡先、収入証明書などの提出が必要です。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            賃貸契約＿途中解約書
                                        </h5>
                                        <p class="__list-desc">
                                            賃貸契約期間中の途中解約をご希望の場合にご提出いただく書類です。解約希望日や条件の確認を行います。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </idv>
                        <idv class="__download-item wow fadeIn">
                            <h4 class="__item-ttl">
                                駐車場について
                            </h4>
                            <div class="__item-lists">
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            駐車場＿新規申込
                                        </h5>
                                        <p class="__list-desc">
                                            駐車場利用の新規契約を希望する方の申込書です。車両情報や契約期間を記入のうえご提出ください。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            駐車場＿途中解約
                                        </h5>
                                        <p class="__list-desc">
                                            契約途中での駐車場利用の解約をご希望の方用の書類です。解約日や車両情報を記入し提出してください。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </idv>
                        <idv class="__download-item wow fadeIn">
                            <h4 class="__item-ttl">
                                不動産について
                            </h4>
                            <div class="__item-lists">
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            不動産購入申込書
                                        </h5>
                                        <p class="__list-desc">
                                            不動産物件購入を検討される方の申込書です。物件情報や予算を記入し、購入手続きを進めます。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </idv>
                        <idv class="__download-item wow fadeIn">
                            <h4 class="__item-ttl">
                                その他
                            </h4>
                            <div class="__item-lists">
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            会社概要
                                        </h5>
                                        <p class="__list-desc">
                                            当社の事業内容や理念、サービス内容を紹介する資料です。取引や提携をご検討の方に最適です。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="__list">
                                    <div class="__list-ctn">
                                        <h5 class="__list-ttl">
                                            秘密保持
                                        </h5>
                                        <p class="__list-desc">
                                            情報保護に関する秘密保持契約書です。取引に伴う顧客情報等の保護内容についての同意事項を明記しています。
                                        </p>
                                    </div>
                                    <div class="__list-downloadbtns">
                                        <div class="__btn">
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/irinformation/ico-pdf.png" alt="">
                                            </figure>
                                            <div class="__size">
                                                (230KB)
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </idv>
                    </div>
                </div>

                <a href="#" class="__download-btn">
                    資料を一括ダウンロードする
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.288462" y="14.6347" width="14.4231" height="0.576923" fill="white" stroke="white"
                            stroke-width="0.576923" />
                        <path
                            d="M7.2109 12.5202C7.40616 12.7155 7.72274 12.7155 7.91801 12.5202L11.1 9.33824C11.2952 9.14298 11.2952 8.82639 11.1 8.63113C10.9047 8.43587 10.5881 8.43587 10.3929 8.63113L7.56445 11.4596L4.73603 8.63113C4.54076 8.43587 4.22418 8.43587 4.02892 8.63113C3.83366 8.82639 3.83366 9.14298 4.02892 9.33824L7.2109 12.5202ZM7.06445 0.5L7.06445 12.1667L8.06445 12.1667L8.06445 0.5L7.06445 0.5Z"
                            fill="white" />
                    </svg>

                </a>
            </div>
        </div>

<?php get_footer() ?>