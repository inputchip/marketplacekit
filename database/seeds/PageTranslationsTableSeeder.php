<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_translations')->delete();
        
        \DB::table('page_translations')->insert(array (

            0 => 
            array (
                'id' => 1,
                'locale' => 'en',
                'title' => 'MyFitPicks Terms of Service',
                'slug' => 'terms-of-service',
                'content' => '

                <div class="">
                    <p class="">Updated September 1, 2018</p>
                    <p>MyFitPicks is a marketplace for booking some of the most unique and top fitness coaches from around the world. We connect customers with personal trainers that they might not have had access to previously. We give our users access to unbiased listings and ratings in order to make an informed decision. Users can search personal trainers, workout programs, prices, request to book, and easily pay through our platform.  Please read our service agreement carefully below prior to using our marketplace and its services as it governs your use of our platform.</p>
                    <p class="">Importantly, this Usage Agreement contains waivers of class actions and jury trials and an agreement to submit all claims and disputes to binding arbitration in Section 4 below. If you do not agree to all the terms and conditions of this Usage Agreement, including those governing disputes in Section 4, you may not use our platform or services.</p>
                    <h2 class="mb-3 mt-5">Services Agreement</h2>
                    <p>This MyFitPicks Services Agreement (“Agreement”) is a contract between MyFitPicks, LLC. (“MyFitPicks” or “we”) and the person(s) that are registered with MyFitPicks (“user” or “you”). This Agreement describes the terms and conditions that apply to your use of the MyFitPicks marketplace to book or list fitness trainers or other fitness services through our website or apps, and governs your training business for other users; and establishes the obligations owed between you and MyFitPicks, and between you and other users.</p>
                    <p>Throughout this Agreement, the term “Service” means the service allowing you to book fitness trainers or offer your training services and training programs to others through our website or apps (the “Platform”). The term Service does not include any services provided by third parties. The terms “Trainee” and “Trainer” refer to the party Booking or Listing a fitness trainer or training program, respectively.</p>
                    <p>A “Trainer” is the certified fitness trainer that made available training services or programs to a Trainee to use during specific times, and subject to specific Fees and any site-specific terms or limitations. A Trainer may “List” a fitness trainer or fitness program by providing certain details about the offering including availability, pricing, and terms or limitations of use; this posting about a Trainer or Program is called a “Listing.”</p>
                    <p>A trainee may “Book” a Trainer or Program by accepting the times, fees, and any additional terms (such as fees for gym memberships) or limitations of the Listing. A “Booking” is 
                    (i) only the grant of a limited, temporary, revocable license to use a Trainer’s services, and 
                    (ii) if applicable, a contract for other Trainer Services, in the manner, for the time, and subject to all restrictions provided, subject to this Agreement, and as confirmed through the Platform. The scope of the use, including times, specific fees, and other additional terms or limitations, constitutes a “Booking Agreement” that incorporates the terms and conditions of this Agreement and referenced policies. A Booking does not provide you a lease but only allows you limited access to use the Services or other service only as permitted in the Agreement and, as applicable, the Booking Agreement.</p>
                    <p>This Agreement is organized into 5 sections:</p>
                    <ul>
                        <li><span class="">Section 1: General Terms</span> includes general terms describing your Account including creating an account, accepting or making payments, and describing how we communicate with you.</li>
                        <li><span class="">Section 2: Platform and Service</span> describes how you may and may not use the Platform and Service, and also describes how we use any data.</li>
                        <li><span class="">Section 3: MyFitPicks Services</span> establishes the obligations of Trainers, including how to List a Trainer or Program and what is expected of any Trainer Listed through the Service; and the obligations of Trainees, including Booking a Trainer or Program, expected behavior, responsibility for payment of Fees, and Booking other services.</li>
                        <li><span class="">Section 4: Termination, Disputes, and Binding Arbitration</span> describes termination or suspension of this Agreement or your Account, and the process of resolving any
                            disputes. <span class="">This section contains waivers of both class actions and jury trials, and an agreement to submit all claims and disputes to binding arbitration. Please read this section carefully before accepting this Agreement –you may not use the Platform or Services if you do not agree to this section.</span></li>
                        <li><span class="">Section 5: Additional Legal Terms</span> provides additional legal terms including our ability to update this Agreement, disclaimers and limitations on our liability, and some specific terms for users outside of the United States. It also includes other documents governing your use of the Services including our Community Guidelines, Fees, Privacy Policy, and Cancellation and Refund Policy.</li>
                    </ul>
                    <p>If you have questions about this Agreement, please contact us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a> Your use of the Platform or Services constitutes your ongoing acceptance of this Agreement,
                        as amended.</p>

                    <h2 class="mb-3 mt-5">Section 1: General Terms</h2>
                    <h3 class="mb-3 mt-5">1.1 Services</h3>
                    <p>MyFitPicks provides you access to Services through the Platform. You may access the Platform through our website. You may use the Service to List Fitness Trainers or Fitness Programs, Book Trainers or Programs as a Trainee, communicate with other users, and access your Account.</p>
                    <p>You may also be permitted to Book Trainer Services (“Trainer Services”) through third-party service providers or through the Trainer, which may require you to agree to additional terms or conditions. These Trainer Services may include Nutritional Programs, Diet Programs, Training Programs, or other Services that Fitness Trainers offer. This is however not the main marketplace Service provided by MyFitPicks.</p>
                    <p>We are continuously improving the Platform or Service for all users and reserve the right to make changes at any time. Changes we make to the Platform or Service, including discontinuing certain features, affect all users and we try to minimize disruption to users. However, these changes may affect users differently. We are not responsible if any specific changes we make to the Platform or Service adversely affect how you use them.</p>
                    <h3 class="mb-3 mt-5">1.2 Your Account</h3>
                    <p>Before using the functionality of our Platform or Services, you must create an account with MyFitPicks (“Account”) and provide us with information about yourself or your company. We may ask that you update your Account or provide additional or different information at any time. This includes requiring additional details about Trainers or payment information. Any employees, contractors, or third-parties opening a new or using an existing account (collectively, “Agents”) represent and warrant that they have authorization to act on behalf of a person or entity they claim to represent; and if such authorization is not provided by the person or entity, such Agents acknowledge personal liability for all obligations and liabilities arising from or related to use of the Account by such Agents.</p>
                    <p>You will be required to provide an email address and password to keep your Account secure (“Credentials”), and agree to keep your Credentials private and secure. You are responsible for any actions taken on your Account using your Credentials whether or not authorized or taken by Agents to List or Book a Trainer or Trainer Services. You are solely responsible for the actions or communications of your Agents. We are not responsible for and disclaim all liability for use of your Account by your Agents.</p>
                    <p>When creating or using your Account, you may be required to provide information about yourself or your Training Business. You will only provide Content to us that you own or have authorization to provide, and ensure that Content is accurate and complete. You must keep any Content current, including your contact or payment information. We reserve the right, but shall not be obligated, to use public and private data sources to validate the accuracy of any Content. This may include validating your identity or business information, or verifying information about Trainers. You will provide us any additional information to verify the accuracy or completeness of any Content that you provide and we may condition your use of the Platform or Service on our ability to verify the accuracy and completeness of this Content. If you do not provide required Content to us as and when we request it, we may suspend or terminate your Account.</p>
                    <p>If you are not at least 18 years old, you may not open an Account, access the Platform, or use the Services. Users (including Agents) who use the Services or the Platform to List or Book Trainers, Trainer Services on behalf of individuals under 18 years old, or provide access or use of Trainers by individuals under 18 years old, accept personal liability for all acts or omissions of such individuals.</p>
                    <p>You may close your Account at any time by emailing us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. You are responsible for all activity associated with your Account made before it is closed including payment of Fees, Taxes, or other Payments; providing use of Training Services to Trainees as previously Booked; or other liabilities caused by or resulting from use of the Platform or Service. You understand that we may retain Content and continue to display and use any public Content (including reviews of Trainers) provided to us prior to closing your Account.</p>
                    <p>At our sole option, we may suspend or terminate your Account.</p>
                    <h3 class="mb-3 mt-5">1.3 Compliance with Laws</h3>
                    <p>As used in this Agreement, “Laws” means all applicable federal, state, local, and other governmental laws, regulations, ordinances, codes, rules, court orders, and all recorded and unrecorded private contract, restrictions, covenants and other agreements. You will comply with all Laws applicable to your use of the Trainer, Services, Platform, Trainer Services, whether as a Trainer or Trainee. While we may provide information to help you understand certain obligations of using or listing Trainers, we are not authorized to provide and do not provide any legal advice. You are solely responsible for your compliance with Laws and may only use the Platform or Service in compliance with applicable Laws. If you are unsure how to comply with Laws, you should seek legal advice related to Listing or Booking a Trainer.</p>
                    <h3 class="mb-3 mt-5">1.4 Fees and Taxes</h3>
                    <p><span class="">(a) Fees, Overtime.</span> You are responsible for payment of fees, expenses, and other amounts related a to Booking (“Fees”). Fees include amounts paid to MyFitPicks, Trainers, and Trainer Services and as described in our Fees Overview. MyFitPicks receives Fees for providing use of the Service, and Trainers receive Fees for Bookings. The specific Fees charged are presented when you request, complete, and pay for a Booking. Please review the Trainers individually listed cancellation policy on their Listing prior to submitting a Booking request. You should contact Trainers through the Platform before Booking if you don’t understand the Fees listed or their cancellation policy that will be applicable. Please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a> at any time if you do not understand Fees or have questions regarding them.</p>
                    <p>A Booking provides a limited use of a Trainer or Trainer Services as described in the Listing and Booking Agreement, if applicable. If you use a Trainer or Trainer Services beyond the Booking you will be responsible for payment of additional Fees (“Additional Fees”) at the Trainer’s discretion. You are solely responsible for any damage done to the Training Facility during your Booking.</p>
                    <p>While we may facilitate the collection of Fees for Trainers and Trainer Services, once remitted to Trainers, we are not responsible for the return of Fees or Deposits to Trainees, where applicable.</p>
                    <p><span class="">(b) Taxes and Fines.</span> You are solely responsible for payment of all taxes, levies, penalties, and other costs imposed by any taxing authority or government agency related to Listing or Booking Trainers or Trainer Services including any sales or occupancy tax, indirect taxes such as valued added tax (VAT) or goods and services tax (GST), usage or permitting fees, duties, and other taxes imposed by municipalities, states, or governments through regulation, ordinance, law, or judicial or regulatory interpretation (collectively “Taxes”). Except as required by Law, MyFitPicks will not calculate, track or pay Taxes or submit Tax reporting on your behalf. You are responsible for all Taxes owed for Booking or Listing a Trainer, or providing or using Trainer Services including, without limitation, accurate calculation of Taxes due, timely remittance of Taxes to the appropriate taxing authority and maintenance of any required records and accounts. If any taxing authority demands that we pay such Taxes on your behalf, you are immediately liable to us for such Taxes and will reimburse or pay MyFitPicks for such Taxes upon demand. You are also responsible for any penalties arising from your failing to comply with this Agreement including those issued by regulatory or taxing authorities, law enforcement, fire code or safety agencies, or other third parties; or that may be issued by us for losses we or users incur that are based on your failing to comply with this Agreement or misuse of the Platform, Services, Trainer, or Trainer Services (collectively, “Fines”). You understand and agree that MyFitPicks does not provide you with any advice or guidance of any kind or nature regarding Taxes and that you have been advice to consult with your tax advisor for any required advice or guidance regarding Taxes.</p>
                    <p><span class="">(c) Payment.</span> You will timely and fully pay any Fees, Taxes, or other amounts you owe under this Agreement. If you owe amounts and we are unable to receive payment through the Platform for any reason, then we may require that you pay through other means (such as direct debit). We may set-off any amounts owed to us through collection of funds that would otherwise be payable to you through the Platform. You are responsible for any costs or expenses associated with our recovering Fees, Taxes, or Fines owed, including our attorneys’ fees or expenses.</p>
                    <h3 class="mb-3 mt-5">1.5 Receiving Payment</h3>
                    <p>Acceptance and payment of funds between users or MyFitPicks on the Platform (“Payment Processing”) is provided by <a href="https://stripe.com" target="_blank" rel="noopener noreferrer">Stripe</a>. Your use of Payment
                        Processing is subject to the <a href="https://stripe.com/connect-account/legal" target="_blank" rel="noopener noreferrer">Stripe Connected Account Agreement</a> that includes the <a href="https://stripe.com/legal"
                            target="_blank" rel="noopener noreferrer">Stripe Services Agreement</a> as may be modified by Stripe from time to time (collectively, the “Stripe Agreement”). As a condition using Payment Processing, you must provide accurate and complete information about you and your business and you authorize us to share this information to Stripe. All bank and credit card information is sent directly to and stored with Stripe using their security protocols. MyFitPicks does not store your payment information on its systems and shall not have any responsibility for the safety or security of that information. Your use of Payment Processing is conditioned upon your compliance with the Stripe Agreement, and if the Stripe Agreement is terminated by Stripe you may not be able to use the Platform, or have your Account suspended or terminated.</p>
                    <p>We may change or add other payment processing services at any time upon notice to you, which may be subject to additional terms or conditions.</p>
                    <h3 class="mb-3 mt-5">1.6 Communication and Notices</h3>
                    <p>We may communicate with you and provide you information or notices regarding your Account or transactions through email or through messaging on the Platform. You will promptly respond to any communications you receive and understand that failure to do so may impact your ability to Book or List Trainers, or use the Platform or Services.</p>
                    <p>We may send you notices to the email address or physical address included in your Account, through messaging on the Platform. You may send any notices to us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. You agree that any email notice from us is considered accepted by you one day after such notice was sent and will have the same legal effect as if it were physically delivered to you.</p>
                    <p>You agree to receive any communications from us and transact with us electronically. This acceptance of emails or other electronic messages constitutes your consent and your electronic signature has the same legal effect as physically signing a document. You may withdraw this consent to transact electronically at any point by providing notice to us. However, given that electronic communication is integral to the Platform and the Services, following any such notice we may elect to close your Account.</p>
                    <p>If you have problems communicating receiving messages, please first please contact us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>.</p>
                    <h3 class="mb-3 mt-5">1.7 Communication with Other Users</h3>
                    <p>The Platform allows you to communicate with other users without disclosing sensitive personal contact information. It is your responsibility to use good judgment in the information you provide to other users. You may use the Platform only to List or Book Trainers or Trainer Services, communicate with us or other users, resolve disputes, or use other functionality we provide to you through the Platform. You may not use the Platform to send messages that are unwanted or unrelated to a Listing or Booking through the Platform, use the Platform to harass or attempt to market other services to users, or send spam.</p>
                    <p>We strongly recommend that you should use the Platform to communicate with other users. If you use other means of communication you understand that you may be putting your personal contact information at risk of misuse. You also understand that any communications made outside of the Platform may impair your ability to recover all or some amounts owed to you in the event of a dispute between you and another user.</p>
                    <p>We are not responsible for, and disclaim all liability resulting from, any losses or harm to you resulting from sharing personal or sensitive information with other users, or communicating or engaging with users outside of the Platform.</p>
                    <p>MyFitPicks, at its sole option and without notice or any obligation to do so, may from time to time (i) remove communications among users which contain or share personal contact information, or (ii) suspend or terminate the accounts of users that share personal contact information.</p>

                    <h2 class="mb-3 mt-5">Section 2: Platform and Service</h2>
                    <h3 class="mb-3 mt-5">2.1 Ownership, License, Restrictions</h3>
                    <p>MyFitPicks owns all right, title, and interest in the Platform, Services, and all intellectual property embodied or contained in them (individually and collectively, “IP”). IP includes all registered or potential patents, copyrights, trademarks, trade secrets, and other proprietary rights. Through your Account, we grant you a limited, temporary, revocable, non-transferable, non-exclusive license to use the Platform and Service for the purposes described in this Agreement and only as provided to you through the Platform. This license does not constitute a transfer of ownership or grant you any additional rights to use the IP. We may suspend or close your Account and pursue legal action against you if we believe or determine that your use of the Platform, Service, or IP exceeds the scope of this grant; or that you are attempting to hack or disrupt the use of the Platform, Service, or IP by others; or that you are otherwise interfering with the normal operation of the Platform or Service.</p>
                    <h3 class="mb-3 mt-5">2.2 Community Guidelines</h3>
                    <p>We have established Community Guidelines that set our expectations for all users on the Platform. You will review and abide by the Community Guidelines whenever using the Platform or Services, communicating with other users, or using or providing use of Trainers. If you believe that another user is violating the Community Guidelines, please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. MyFitPicks shall have no duty to monitor users’ compliance with or to enforce the Community Guidelines and shall have no liability for any user’s violation of the Community Guidelines.</p>
                    <h3 class="mb-3 mt-5">2.3 Content</h3>
                    <p><span class="">(a) Posting Content.</span> You represent and warrant that you are authorized to provide Content to the Platform and that any Content you provide does not violate the proprietary or privacy rights of a third party. You may not provide any Content that is copyrighted by third parties without their express permission. You grant MyFitPicks a fully-paid, worldwide, non-exclusive, perpetual license to use, copy, transmit, distribute, modify, publicly display, and sublicense any Content you provide to us. This grant includes our ability to use any Content for both internal use (such as analysis to improve the Platform or Services) or external use (such as in marketing or online advertising). If you cannot provide us the above grant then you may not provide Content to us. You agree to indemnify, defend and hold us harmless for any damages or losses based on third-party claims that Content violates proprietary or privacy rights.</p>
                    <p><span class="">(b) Restrictions on Certain Content.</span> You may never post any Content that (i) is defamatory, obscene, profane, or pornographic; (ii) is abusive, harassing, or disrespectful of other users; (iii) violates applicable Laws, including those prohibiting discrimination, false advertising, privacy, or unlawful marketing; (iv) is intended to deceive or mislead, is false or inaccurate, or misrepresents the nature or condition of a Trainer; (v) contains marketing or promotional content unrelated to the details of a Trainer; or (vi) includes sensitive personal information, including payment, contact information, or personal account details.</p>
                    <p><span class="">(c) DMCA Notices.</span> If you believe that any Content posted violates your copyright, please notify us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. This notice should identify the specific Content and provide us with evidence of your ownership of the copyright or authorization to enforce the rights of the copyright owner. Any information you provide to us may be shared with other users, third parties, or law enforcement to help assess the claim of infringement or remove infringing content. We will remove any content we determine to be infringing consistent with our obligations under the Digital Millennium Copyright Act (DMCA).</p>
                    <h3 class="mb-3 mt-5">2.4 Privacy and Data Usage</h3>
                    <p>Our Privacy Policy describes our collection, use, storage, and sharing personal information. This includes personal information included in Content and information collected through use of the Platform. We may anonymize, pseudonymize, or aggregate any information, including personal information or Content, and use this information for any purpose including improvement of the Platform or Services, or creating or distributing public marketing collateral.</p>

                    <h2 class="mb-3 mt-5">Section 3: MyFitPicks Services</h2>
                    <h3 class="mb-3 mt-5">3.1 Listing Trainers and Services - This section applies to Trainers</h3>
                    <p><span class="">(a) Listings.</span> When you List a Trainer or Trainer Service, you must provide details about the Trainer or Service including a description, the cost of a Booking, a list of equipment, current pictures, and other details about their potential uses and condition (collectively, “Description”). While it is important to communicate the benefits of your Training Business, the Description must be accurate and give potential Trainees a reasonably good understanding of how they may use the Training Program or Service for their Booking. Descriptions may not include any additional contractual obligations or alter Trainees legal liabilities from those described in this Agreement.</p>
                    <p><span class="">(b) Transacting with Trainees.</span> All Trainers must comply with our Community Guidelines when Listing a Trainer or Service, providing a Description, and in transacting with Trainees. You are responsible for maintaining the Trainer and Trainer Services so that Trainees may reasonably use them as provided in the Description and Booking.</p>
                    <p><span class="">(c) Conduct and Fees.</span> As a Trainer, you are solely responsible for ensuring that Trainer or Service complies with all applicable Laws including any local ordinances related to the condition, licensure, or registration Trainers for use by Trainees, and payment of Taxes. We may condition your continued use of the Platform and Services on your providing proof, to our reasonable satisfaction, of your compliance with Laws at any time.</p>
                    <h3 class="mb-3 mt-5">3.2 Booking Trainers and Trainer Services - This section applies to Trainees</h3>
                    <p><span class="">(a) Bookings.</span> As a Trainee, you should review the Description and availability to confirm they are appropriate for your Booking. The Platform allows you to confirm any details or ask the Trainer any specific questions about the Trainer or Trainer Services, or confirm details of a Booking, without sharing your personal contact information. Prior to Booking, you will need to provide payment information through the Platform. Booking Fees will be shown before you complete your Booking. You are responsible for all Fees and Taxes associated with the Booking. All Bookings are subject to the Cancellation Policy listed on each individual Trainer Listing.</p>
                    <p>When you Book a Trainer, you are only provided a license to use the Trainer’s Services as described in the Booking and confirmed by the Trainer, subject to this Agreement and any Booking Agreement. A Booking does not provide you a lease or access or use of the Trainer beyond the specified time and Description.</p>
                    <p><span class="">(b) Conduct and Fees.</span> You will comply with the Community Guidelines and any Booking Agreements throughout the Booking and use the Trainer or Trainer Services only as permitted or agreed upon and consistent with the Description, and assure that any attendees do the same. During your Booking, you are responsible for (i) the behavior and acts of others in attendance that access the Trainer, (ii) ensuring that the use does not exceed any limitations identified in the Booking, (iii) complying with applicable Laws. You are responsible for and accept all liability for any damage done to the Training Facility during your Booking by yourself or others in attendance whether intentional or not, for your failure to comply with applicable Laws, and for any Fines you incur. You agree the Training Facility and all equipment will be in substantially the same condition as provided to your or as otherwise agreed in any Booking Agreement and consistent with the Community Guidelines, and to promptly notify Trainers of any damage done to the Training Facility or Amenities.</p>
                    <h3 class="mb-3 mt-5">3.3 Required and Supplemental Insurance</h3>
                    <p><span class="">(a) Required Insurance.</span> Every Trainer will acquire and maintain all insurance as required by Law and suitable for you or your business. You are solely responsible for understanding and evaluating what insurance is appropriate to cover damage, loss, injury, legal liability, and other harm specific to you, your business, those attending the Booking, third parties, the Trainer, and deciding what coverage, limits and providers are appropriate for you.</p>
                    <h3 class="mb-3 mt-5">3.4 Cancellations and Refunds</h3>
                    <p>All cancellations and any refunds that may be available to you are subject to our Fees and cancellations are subject to the individual Cancellation Policy identified on each Trainers Listing. MyFitPicks is not liable for any fees, expenses, or liability that is not in compliance with the Cancellation Policy for a Listing.</p>

                    <h2 class="mb-3 mt-5">Section 4: Termination, Disputes, and Binding Arbitration</h2>
                    <h3 class="mb-3 mt-5">4.1 Term, Termination, and Survival</h3>
                    <p><span class="">(a) Term and Termination By User.</span> You consent to this Agreement when you first access or use the Platform or Services, and your continued use of the Platform and Services constitutes your ongoing consent to this Agreement as amended from time to time. You may terminate this Agreement by closing your Account with us, however this will not immediately terminate any ongoing rights or obligations you or we may have. This includes any obligations to pay for Bookings, to honor any Bookings made before termination, or to pay Fees, Taxes or Fines due; or any liabilities that you incurred prior to termination.</p>
                    <p><span class="">(b) Suspension or Termination by MyFitPicks.</span> We may suspend your Account--including your ability to communicate with other users or receive payments, or complete a Booking--or terminate this Agreement and your Account at any time including, without limitation, (i) if we believe that use of your Account poses a risk to MyFitPicks, you, other users, or third parties, (ii) actual or potential fraud by you or on your behalf, (iii) your failure to respond to communications from us or other users, or (iv) your failure to comply with this Agreement or applicable Law.</p>
                    <p><span class="">(c) Survival.</span> The following provisions will also survive termination of this Agreement: Sections 1.3 (Compliance with Laws), 1.4 (Fees and Taxes), 1.6 (Communication and Notices), 1.7 (Communication with Other Users), 2.1 (Ownership, License, Restrictions), 2.2 (Content), 2.4 (Privacy and Data Usage), Section 3.1(Conduct and Fees) for Trainers, Section 3.2(b) (Conduct and Fees) for Trainees, 3.3 (Required and Supplemental Insurance), 3.7 (Cancellations and Refunds), 4 (Termination, Disputes, and Binding Arbitration), and Section 5 (Additional Legal Terms).</p>
                    <h3 class="mb-3 mt-5">4.2 Binding Arbitration</h3>
                    <p class="">This section describes how disputes or claims arising under this Agreement between you and MyFitPicks or between you and another user (not resolved through the process set forth in Section 4.3) will be resolved. It includes waivers to both a jury trial and your ability to join other plaintiffs as part of a class action. Please read this section carefully before accepting this Agreement—you may not use the Platform or Services if you do not agree to this section.</p>
                    <p><span class="">(a) Process for Arbitration.</span> Subject to the exclusions provided in Section 4.2(b) and the process provided in Section 4.3, all disputes, claims, and controversies arising under or related to this Agreement between you and MyFitPicks or between you and another user (if not resolved pursuant to Section 4.3 below) will be resolved through binding arbitration as follows:</p>
                    <ul class="">
                        <li>(i) if the amount of the dispute, claim, or controversy is reasonably less than $25,000, resolution shall be administered online by FairClaims (www.fairclaims.com) or another online arbitration provider of our choosing in accordance with their applicable arbitration rules and procedures effective at the time a claim is made. You consent to receive electronic service of process at the email associated with your Account. Where you are delinquent in responding to such process, you will be responsible for any attorney, court, or other fees associated with the delinquency. The party filing the User Dispute will be responsible for payment of any costs associated with that filing, including costs borne by MyFitPicks. As a part of the User Dispute, you may also seek to recover these costs if you prevail.</li>
                        <li>(ii) if the amount of the dispute, claim or controversy is reasonably $25,000 or more, resolution shall be before a single arbitrator and administered by JAMS. This includes but is not limited to any statutory or common law claims relating to breach, enforcement, or interpretation of this Agreement and any Booking Agreement. Any such arbitration will take place in the county where the Booked or Listed Trainer is located, unless you and MyFitPicks mutually agree otherwise. The arbitrator will apply the substantive Laws of California. All claims from $25,000 to $250,000 shall be subject to the JAMS Streamlined Arbitration Rules. The Federal Arbitration Act (9 U.S.C. §§ 1-16) will govern all such arbitrations under this Agreement. To initiate such an arbitration, a party will provide a written demand that states both the basis of the claim and the desired relief. Each party irrevocably and unconditionally consents to service of process through personal service at their corporate headquarters, registered address, or primary address (for individuals or sole proprietors). Nothing in this Agreement affects the right of any party to serve process in any other manner permitted by Law.</li>
                    </ul>
                    <p>Once arbitration is initiated as provided in Subsections (i) or (ii) above, the parties will share the costs of the arbitration, facilities, and arbitration reporters (as necessary) equally except as otherwise determined by the arbitrator. Each party will be responsible for its own attorneys’ fees and legal costs. The arbitrator may award the prevailing party recovery of any of the costs of arbitration or legal fees as they see appropriate.</p>
                    <p>The arbitrator may provide for any monetary or other remedies that are available under applicable Law but may not modify the terms of this Agreement or any Booking Agreement. The arbitrator will provide a reasoned decision addressing the specifics of the dispute. The decision is binding and not subject to appeal. The parties will act promptly to respect the decision of the arbitrator, including payment of any amounts owed or taking of any action required.</p>
                    <p>Any judgment on the award rendered by the arbitrator may be entered in any court having jurisdiction.</p>
                    <p><span class="">(b) Certain Claims Excluded.</span> Notwithstanding Section 4.2(a), the parties agree that any claims based on ownership or misuse of the other party’s intellectual property—including patents, copyrights, or trademarks—may be brought before the state or Federal courts in California. Either party may also seek provisional remedies for injunctive relief under such claims from a court of competent jurisdiction.</p>
                    <p class=""><em>(c) Class Action and Jury Waiver.</em> Class Action and Jury Waiver. Each party agrees that any action or claim arising from or related to this Agreement or any Booking Agreement may only be brought on an individual basis and not part of a class action or consolidated arbitration, or join claims with other users or third parties. Further, each party expressly waives its right to a jury in arbitration and court, where permitted. You may opt-out of this class action and jury waiver described in Section 4.2(c) by emailing us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a> within 30 days of your first use of the Platform or Services. You must include your name, phone number, physical address, and email address in your opt-out notice. This is your only mechanism for opting out of this Section 4.2(c) and failure to do so as described constitutes your consent to this waiver. If you choose to opt out of this Section 4.2(c), please note that all other provisions in this Agreement will remain intact and in full force and effect.</p>
                    <p><span class="">(d) Conflict of Rules.</span> If any provision of this Section 4.2 is found to be invalid or unenforceable, the reviewing court or arbitrator, as applicable, will interpret or revise the provisions only as minimally necessary to comply with Law. All the other provisions will remain enforceable and intact as written.</p>
                    <h3 class="mb-3 mt-5">4.3 Disputes Between Users</h3>
                    <p class="">This section describes how disputes or claims arising under this Agreement between you and another user will be resolved. Please read this section carefully before accepting this Agreement—you may not use the Platform or Services if you do not agree to this section.</p>
                    <p><span class="">(a) Initial User Dispute Resolution.</span> You agree to first attempt to resolve any disputes, disagreements, or claims that you have with other users (“User Dispute”) in good faith through the Platform. If you are unable to resolve the User Dispute, you then will submit the User Dispute to us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. In our sole discretion, we may (i) require that you submit additional details regarding any User Dispute, and/or (ii) hold any pending payments or reverse any payments already made to you and hold such payments pending final resolution of the User Dispute. We will review the summary and communications made on the Platform. We may, but are not required to, also review communications made outside of the Platform. Upon review and investigation, we will either (a) provide you and the other user our conclusion based on the summary provided, which you agree to accept as final and binding determination with the same force and effect as if determined through arbitration as provided in Section 4.2; or (b) require that the dispute is resolved through binding arbitration adjudicated by a third party as provided in Section 4.2(a). The party filing the User Dispute will be responsible for payment of any costs associated with that filing, including costs borne by MyFitPicks. As a part of the User Dispute, you may also seek to recover these costs if you prevail. Any payments held by MyFitPicks pending final resolution of a User Dispute shall be disbursed by MyFitPicks as determined by MyFitPicks, the arbitrator, or a court of competent jurisdiction.</p>
                    <p><span class="">(b) User Disputes Under $25,000.</span> After following the process outlined above, if the User Dispute relates to an amount reasonably less than $25,000, you agree to submit the User Dispute to binding arbitration as provided in Section 4.2(a)(i) above.</p>
                    <p><span class="">(c) User Disputes of $25,000 or higher.</span> After following the process outlined above, if the User Dispute relates to an amount reasonably $25,000 or more, you agree to submit the User Dispute to binding arbitration as provided in Section 4.2(a)(ii) above.</p>
                    <h3 class="mb-3 mt-5">4.4 Confidentiality of Proceedings</h3>
                    <p>Any proceedings pursuant to this Section 4 and their results will be maintained as confidential by all parties. Except as may be required by Law, the parties and those persons participating in the proceedings on their behalf will not disclose and will maintain the confidentiality of all materials, testimony, and evidence provided during the proceeding as well as the results of such proceeding. The parties agree to enter into a separate confidentiality agreement or order, as appropriate, to maintain the confidentiality of the proceedings.</p>
                    
                    <h2 class="mb-3 mt-5">Section 5: Additional Legal Terms</h2>
                    <h3 class="mb-3 mt-5">5.1 Right to Amend</h3>
                    <p>We may amend or modify this Agreement at any time by posting the modified Agreement on our website, sending you a copy via email, or otherwise communicating the amendment to you through the Platform. Your continued use of the Platform or Services after we amend or modify this Agreement constitutes your consent to the revised Agreement.</p>
                    <h3 class="mb-3 mt-5">5.2 Cancellations</h3>
                    <p>MyFitPicks is not responsible or liable for nonperformance caused by communication failures or nonperformance of Trainers.</p>
                    <p>Cancellations of Bookings, whether with or without cause, or caused by events outside of your reasonable control, are subject to individual Trainer Listing Cancellation and Refund Policy. Please review it carefully before Booking a Trainer or Trainer Services.</p>
                    <h3 class="mb-3 mt-5">5.3 No Assignment</h3>
                    <p>You may not assign this Agreement or any rights granted to you, including operation or management of your Account, without our prior written consent. Any attempt to do so without our prior consent will be void. We may assign this Agreement upon notice to you as part of a sale or transfer of part or all of our business. Any permitted transfer will inure to the benefit of and bind any successors in interest.</p>
                    <h3 class="mb-3 mt-5">5.4 Disclaimers</h3>
                    <p>MYFITPICKS PROVIDES THE PLATFORM AND SERVICE TO LIST AND BOOK TRAINERS AND TRAINER SERVICES, AND COMMUNICATE WITH OTHER USERS. WE ARE NOT RESPONSIBLE TO YOU OR ANY THIRD PARTY FOR PROVIDING, OR FOR THE CONDITION OR NATURE OF, ANY TRAINER OR TRAINER SERVICES. TRAINERS, TRAINEES, AND TRAINER SERVICE PROVIDERS ARE INDEPENDENT THIRD-PARTIES AND ARE NOT AFFILIATED, CONTROLLED BY, OR EMPLOYED BY MYFITPICKS. TRAINERS SET THEIR OWN PRICES, USE THEIR OWN FACILITIES AND RESOURCES, AND MAY CONDITION USE OF TRAINERS OR TRAINERS SERVICES AS THEY FEEL IS APPROPRIATE FOR THEIR BUSINESS.</p>
                    <p>YOU UNDERSTAND AND AGREE THAT USE OF THE PLATFORM AND SERVICES ARE AT YOUR OWN RISK. MYFITPICKS IS NOT RESPONSIBLE FOR PERFORMING AND DOES NOT PERFORM BACKGROUND CHECKS ON TRAINEES, TRAINERS, OR TRAINER SERVICES PROVIDERS (INCLUDING CRIMINAL OR CIVIL CHECKS); DOES NOT REVIEW THE CONDITION OF TRAINERS OR ENSURE THAT THEY COMPLY WITH EXISTING LAW, MEET ANY SPECIFIC REQUIREMENTS, OR ARE CONSISTENT WITH THEIR DESCRIPTION; AND DOES NOT GUARANTEE PERFORMANCE OF ANY USER OR THIRD PARTY. ANY INFORMATION PROVIDED TO YOU REGARDING TRAINEES, TRAINERS, OR TRAINER SERVICES PROVIDERS IS ONLY PROVIDED TO FACILITATE YOUR USE OF THE PLATFORM AND IS PROVIDED “AS IS” AND WITHOUT ANY REPRESENTATION OR WARRANTY. MYFITPICKS DISCLAIMS ALL REPRESENTATIONS AND WARRANTIES, EXPRESS AND IMPLIED, THAT ANY INFORMATION PROVIDED THROUGH THE PLATFORM IS ACCURATE OR COMPLETE, OR THAT ANY TRAINEES, TRAINERS, OR TRAINER SERVICES PROVIDERS WILL BE PROVIDED TO YOU AS DESCRIBED. MYFITPICKS DISCLAIMS ALL RESPONSIBILITY FOR AND LIABILITY RESULTING FROM THE NEGLIGENCE, INTENTIONAL MISCONDUCT, OR CRIMINAL ACTIVITY OF ALL USERS OR THIRD PARTIES, OR ANY INJURY OR PROPERTY DAMAGE THAT OCCURS TO YOU, THIRD PARTIES, OR PROPERTY WHILE ACCESSING OR USING TRAINERS OR TRAINER SERVICES.</p>
                    <p>THE PLATFORM AND SERVICES ARE PROVIDED TO YOU ON AN “AS IS” AND “AS AVAILABLE” BASIS WITHOUT ANY GUARANTEE OR WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING WITHOUT LIMITATION WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, SUITABILITY FOR YOUR PARTICULAR USE, OR NONINFRINGEMENT. WITHOUT LIMITING THE FOREGOING, WE DISCLAIM THAT THE PLATFORM OR SERVICES ARE FREE FROM ERROR OR VIRUSES; THAT THEY WILL NEVER CAUSE HARM; THAT THEY MEET OR BE SUITABLE FOR YOUR NEEDS OR REQUIREMENTS; THAT THEY ARE ALWAYS AVAILABLE; OR THAT THEY ACCURATELY REPRESENT TRAINERS OR TRAINER SERVICES PROVIDERS. WE EXPRESSLY DISCLAIM ANY OBLIGATION TO CORRECT ERRORS, EVEN THOSE THAT WE ARE AWARE OF, AND MAY CHOOSE TO DISCONTINUE OPERATION OF THE PLATFORM OR SERVICE, OR FEATURES OF EITHER, AT ANY TIME.</p>
                    <h3 class="mb-3 mt-5">5.5 Representations and Warranties</h3>
                    <p>By opening your Account, you represent and warrant that (a) you are authorized to use the Platform and Services and have authority to execute this Agreement; (b) that you have only one Account with us and have not had an Account terminated by us previously; (c) all information provided to us is accurate and complete; (d) you will not use the Platform or Services in violation of Law or the Community Guidelines, to commit fraud, to deceive other users, or for any other improper purpose; and (e) you are authorized to provide any Content to us.</p>
                    <p>When using the Platform or Services as a Trainer, you further represent and warrant that (f) you are permitted under applicable Laws to List any Trainers provided; (g) your Listing of a Trainer and the Trainer itself comply with applicable Laws; and (h) you will reasonably facilitate the use of, and not obstruct the use of, the Trainers as Booked by Trainees.</p>
                    <p>When using the Platform or Services as a Trainee, you further represent and warrant that (i) you will comply with any Booking Agreements; (j) you will not use Trainers or Trainers Services in a manner that violates Laws or Community Guidelines, or that facilitates the violation of either by third parties; and (k) that any payment Credentials provided to us may be used as described in this Agreement.</p>
                    <h3 class="mb-3 mt-5">5.6 Indemnities</h3>
                    <p>You will indemnify, defend and hold MyFitPicks and its owner(s), agents, members, information providers, attorneys, or affiliates (collectively, “MyFitPicks Affiliates”) harmless against all third-party claims, liabilities, losses, damages, and related expenses (including reasonable legal expenses) (collectively, “Claims”) arising from or related to (a) provision of your Trainer (for Trainers) or Trainer Service (for Trainers), or use of Trainers or Trainer Services (for Trainees); (b) Content you provide through the Platform; (c) your failure to comply with Laws; (d) your providing of information to us that is inaccurate or incomplete, (e) your breach of any of your obligations under this Agreement, and (f) any contract or other agreement between you and any other user other than through the Platform. This indemnification will survive termination of this Agreement.</p>
                    <h3 class="mb-3 mt-5">5.7 Limitations of Liability</h3>
                    <p>EXCEPT TO THE LIMITED EXTENT OF THE MYFITPICKS FEES (AS DEFINED BELOW) UNDER NO CIRCUMSTANCES OR ANY LEGAL THEORY WILL MYFITPICKS OR ITS OWNERS, AGENTS, MEMBERS, INFORMATION PROVIDERS, ATTORNEYS, OR AFFILIATES BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DAMAGES (WHETHER DIRECT, INDIRECT, GENERAL, COMPENSATORY, INCIDENTAL, CONSEQUENTIAL, SPECIAL, PUNITIVE, EXEMPLARY OR OTHERWISE), INJURY, CLAIM OR LIABILITY OF ANY KIND OR CHARACTER BASED UPON OR ARISING FROM YOUR USE OF OR INABILITY TO USE THE PLATFORM OR SERVICES, OR TRAINERS OR TRAINER SERVICES, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. IF YOU ARE DISSATISFIED WITH THE PLATFORM OR SERVICES, OR ANY CONTENT CONTAINED THEREIN, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE PLATFORM AND SERVICES.</p>
                    <p>AS USED HEREIN, “MYFITPICKS FEES” SHALL MEAN THE AMOUNT PAID BY YOU TO MYFITPICKS, EXCLUDING ANY AMOUNTS THAT WERE PAID OR PAYABLE TO TRAINERS OR TRAINER SERVICES, FOR USE OF THE PLATFORM OR SERVICES.</p>
                    <p>THE LIMITATION OF LIABILITY SET FORTH ABOVE APPLIES TO THE EXTENT PERMITTED BY LAW.</p>
                    <h3 class="mb-3 mt-5">5.8 Additional Terms for Users outside the US</h3>
                    <p>We may allow for use of the Service to List Trainers outside of the United States. Where this is permitted, you will be required to ensure that your use of the Service, including Listing or Booking, as applicable comply with all Laws specific to your country, province, or region. European users may be required to provide information to assist with our collection of VAT or other indirect Taxes, or evidence of your exemption such Taxes.</p>
                    <h3 class="mb-3 mt-5">5.9 Entire Agreement; Interpretation</h3>
                    <p>This Agreement together with any Booking Agreement constitutes the entire agreement between you and MyFitPicks governing your use of the Platform or Services. This Agreement supersedes all prior understandings or agreements between you and MyFitPicks. As between you and MyFitPicks, this Agreement controls over any conflicting terms in a Booking Agreement except where expressly stated otherwise and agreed upon in writing between the parties.</p>
                    <p>Any monetary amounts described in this agreement will be in USD and “$” will be read to mean United States Dollars.</p>
                </div>

                ',
                'seo_title' => 'Terms of Service',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),

            1 => 
            array (
                'id' => 2,
                'locale' => 'en',
                'title' => 'MyFitPicks Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => '

                <div class="">
                    <p class="">Updated September 1, 2018 </p>
                    <p>This Privacy Policy explains how MyFitPicks, LLC (“MyFitPicks” or “we”) collects, uses, and shares personal information. As used in this Privacy Policy, “you” may refer to either a user of MyFitPicks’s products or services (“Services”); or a person providing visiting our website, using our apps, or interacting with us. This Privacy Policy describes our use of information that identifies or might reasonably identify you (“personal information”).</p>
                    <p>We may change this Privacy Policy from time to time. If we make changes, we will notify you by revising the date at the top of the policy. In some cases, we may provide you with additional notice, such as sending you an email notification. We encourage you to review the Privacy Policy whenever you use our Services or apps, or visit our website to understand how we use personal information and the ways you can help protect your privacy.</p>
                    <p>If you have questions about this Privacy Policy or our use of personal information, please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. Your use of the website or Services constitutes your acceptance of our use of your personal information as described in this Privacy Policy.</p>
                    <h2 class="mb-3 mt-5">Collection of Information</h2>
                    <h3 class="mb-3">Information You Provide to Us</h3>
                    <p>We may collect and use personal information that you provide directly to us. The types of personal information we may collect when you provide it to us include your name, email or physical address, company information, payment information, pictures, descriptions of properties, and other information you choose to provide.</p>
                    <h3 class="mb-3">No use for children under the age of 18.</h3>
                    <p>The Services are not intended for children under 18 years of age. If you are under 18, do not use or provide any personal information on or through the Services or about yourself to us. If you believe that we might have personal information from or about a child under 18, please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a></p>
                    <h3 class="mb-3">Information We Collect Automatically When You Use our Services</h3>
                    <p>When you access or use our Services, we automatically collect personal information and other information that may include:</p>
                    <ul>
                        <li>Log Information: We log personal information during use of our Services, including browser information, page views, IP addresses, and the website visited before navigating to our website to help us to improve our website and Services.</li>
                        <li>Information Collected by Cookies and Other Tracking Technologies: we may use various technologies to collect information, including cookies. Cookies are small data files stored in device memory that help us to improve our users’ experience of our website and Services, identify popular features, and count visits. We may also collect information using web beacons (also known as “tracking pixels”). Web beacons are electronic images that may be used in our Services or emails to help deliver cookies, count visits, understand usage, and campaign effectiveness and determine whether an email has been opened and acted upon. If your browser is set not to accept cookies, you may not be able to use the website or Services.</li>
                    </ul>
                    <h3 class="mb-3">Information We Collect from Other Sources</h3>
                    <p>We may also obtain information from other sources and combine that with the information we collect through our website or Services. For example, when you create or log into your account through a social media site, we will have access to certain information from that site, such as your name and account information, in accordance with the authorization procedures determined by such social media sites except to the extent that your chosen social media platform allows you to disable this functionality. We may use publicly available tools, such as a Google Analytics, to better understand users’ preferences. Collection of data by third-party tools are subject to their respective privacy policies.</p>
                    <h3 class="mb-3">Use of Information</h3>
                    <p>We may use personal information for various purposes, including to do the following:</p>
                    <ul class="">
                        <li>Provide and deliver the Services, process transactions, and send you Service-related information, including confirmations and invoices;</li>
                        <li>Send you technical notices, updates, security alerts, support messages, and administrative messages;</li>
                        <li>Respond to your comments, questions, and requests, and provide customer service;</li>
                        <li>Provide, maintain, advertise, promote and improve our Services;</li>
                        <li>Facilitate communication among users of our Services;</li>
                        <li>Communicate with you about products, services, offers, promotions, and more about MyFitPicks and others</li>
                        <li>Monitor and analyze trends, usage, and activities in connection with our Services; Personalize and improve our Services and provide content or features through the Service that match user profiles or interests;</li>
                        <li>Link or combine with information we get from others to help understand your needs and provide you with better service; and</li>
                        <li>Carry out any other purpose for which the information was collected.</li>
                    </ul>
                    <p>MyFitPicks is based in the United States, and the information we collect is governed by U.S. law and the laws of the other countries in which we operate. By accessing or using our Services or otherwise providing information to us, you understand and consent to the processing and transfer of information in the U.S. and other countries for the purposes set out in this Privacy Policy.</p>
                    <h3 class="mb-3">Sharing of Information</h3>
                    <p>We may share personal information as follows or as otherwise described in this Privacy Policy:</p>
                    <ul class="">
                        <li>With vendors, consultants, and other service providers who need access to such information to carry out work on our behalf as requested through the Services;</li>
                        <li>With third parties to provide marketing and promotional purposes on our behalf, provided that they have agreed to handle personal information in a manner consistent with this Privacy Policy;</li>
                        <li>In response to a request for information, if we believe disclosure is in required by applicable law, regulation, or rule; or administrative, judicial, or other government order;</li>
                        <li>In connection with, or during negotiations of, any merger, sale of company assets, financing or acquisition of all or a portion of our business to another company; and</li>
                    </ul>
                    <h3 class="mb-3">Anonymized, Pseudonymized, and Aggregated Data</h3>
                    <p>We may also anonymize or pseudonymize to remove any identifying attributes, or aggregate personal information with a sufficiently large number of other information such that it cannot reasonably be linked to you (“anonymized data”). We may use this anonymized data for both internal or public analyses or reporting, but will not identify you in the anonymized data without your consent.</p>
                    <h3 class="mb-3">Analytics Services Provided by Others</h3>
                    <p>We may allow others to provide analytics services. These entities may use cookies, web beacons, and other technologies to collect personal information use of our Services and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked, and conversion information. MyFitPicks and others may use this information to, among other things, analyze and track data, determine the popularity of certain content, and better understand user online activity.</p>
                    <h3 class="mb-3">Security</h3>
                    <p>MyFitPicks takes reasonable measures to help protect personal information from loss, theft, misuse, and unauthorized access, disclosure, alteration, and destruction.</p>
                    <h2 class="mb-3 mt-5">Your Choices</h2>
                    <h3 class="mb-3">Account Information</h3>
                    <p>You may update, correct or delete personal information at any time by emailing us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. If you wish to delete or deactivate your account, you can do so by emailing us, but we may retain certain personal information as required by law or for legitimate business purposes. We may also retain cached or archived copies of your personal information until purged during our normal course of business.</p>
                    <h3 class="mb-3">Cookies</h3>
                    <p>Most web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove or reject browser cookies. Removing or rejecting browser cookies does not necessarily affect third party flash cookies used in connection with our Services. Please note that if you choose to remove or reject cookies, this could affect the availability and functionality of our Services.</p>
                    <h3 class="mb-3">Promotional Communications</h3>
                    <p>You may opt out of receiving promotional communications from MyFitPicks by following the unsubscribe instructions in those communications or by emailing us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>.
                    If you opt out, we may still send you non-promotional communications, including those about your account or transactions.</p>
                    <h3 class="mb-3">Contact Information</h3>
                    <p>Please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a> with any questions or comments about this Privacy Policy.</p>
                </div>

                ',
                'seo_title' => 'Privacy Policy',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'locale' => 'en',
                'title' => "Have questions? We're here to help!",
                'slug' => 'help',
                'content' => '

                    <div class="section-headline margin-top-45 margin-bottom-30">
                        <h4>General Questions</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion js-accordion">

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">What is MyFitPicks?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    MyFitPicks strives to be the largest and most trusted online community to book fitness trainers. We’re a bootstrapped marketplace and have successfully generated thousands of bookings in the past year since we first started.
                                    <br><br>
                                    Our mission is to help customers reach their health goals by making the world’s best personal trainers all around the world easily accessible. We are also dedicated to helping trainers increase their exposure in order to generate more bookings, and take their business further on MyFitPicks.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item active">
                            <div class="accordion-header js-accordion-header">How does MyFitPicks work?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    MyFitPicks is a marketplace for booking some of the most unique and top fitness coaches from around the world. We connect customers with personal trainers that they might not have had access to previously. We give our users access to unbiased listings and ratings in order to make a informed decision. Users can search personal trainers, workout programs, prices, request to book, and easily pay through our platform. Our trainers are also very passionate about helping their clients and providing the best experience possible.
                                </div>
                                
                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">What does MyFitPicks do?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Our marketplace is a platform that allows anyone to create an account in minutes, discover trainers and programs, request a time, book, and pay without any hassles. For trainers, we make it easy to add your profile, programs, manage booking requests, message directly with clients, and accept payments. As a company, we operate the marketplace platform, market trainers to customers, support our community, and ensure that both sides have the best experience possible.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item active">
                            <div class="accordion-header js-accordion-header">Why should I use MyFitPicks?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    If you are a personal trainer, it’s very simple in that we are a platform for you to share your programs and expertise with the clients from around the world, increase your bookings and revenue, and take your business beyond the reach of what was previously possible. We take the time and financial burden out of having to keep up with social media marketing, requests that are not vetted and become a hassle, and easily manage your bookings and payments.
                                </div>
                                
                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I need to create an account?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You can discover and browse trainers and programs without creating an account. To message a trainer, request a booking, or list your programs you will be prompted to create a user account.
                                    All user accounts require an email verification. You must also add further verification and payment information when listing as a trainer.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item active">
                            <div class="accordion-header js-accordion-header">Is it free to list my training programs?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We currently do not charge to create listings or accounts on MyFitPicks. However, we do currently charge a 15% transaction fee for all bookings completed on MyFitPicks. This fee is automatically deducted from your booking total once you accept the request. 
                                    <br><br>
                                    You can learn more about our fees <a href="#">here</a>.
                                </div>
                                
                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">What countries does MyFitPicks support?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    MyFitPicks is an open platform marketplace that is worldwide. However, all values are displayed in US dollars. 
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                    </div>
                    <!-- Accordion / End -->

                    <div class="section-headline margin-top-45 margin-bottom-30">
                        <h4>Trainers</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion js-accordion">

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I add my training programs?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Adding your programs to MyFitPicks is easy and only takes a few minutes. Once you’ve created a MyFitPicks account. Simply click the “Post a Listing” button at the top of the page. Please note that all listings are subject to review by our team to ensure the safety of our community. Once you submit your listing for review, we will approve it within 24 hours. If you need to expedite this process or need help with your listing, please email us at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item active">
                            <div class="accordion-header js-accordion-header">How much is it to add my programs and offerings?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We currently do not charge to list your programs on MyFitPicks. 
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do you charge transaction fees for bookings?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We currently charge a 15% transaction fee for all bookings completed on MyFitPicks. This fee is automatically deducted from your booking total once you accept the request.<br><br>
                                    You can learn more about our fees <a href="#">here</a>.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Why do you charge transaction fees?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    MyFitPicks is maintained by a family owned business in Canada. Instead of starting a venture backed startup that focuses on vanity metrics, revenue at all costs, and expectations of investors, we have chosen to keep MyFitPicks privately owned and operated. We have had no outside funding to date. We would rather build an online platform that is so valuable to the community that our customers are happy to pay the transactional fee in order to build the best online community for fitness training. <br><br>

                                    MyFitPicks is in it’s infancy phase, so we welcome all feedback (good and bad) in order to learn more about your needs, and find the best way that MyFitPicks can help you. Please contact us at admin@myfitpicks.com.<br><br>

                                    You can learn more about our fees <a href="#">here</a>.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I price my offerings on MyFitPicks?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We put pricing in the hands of the trainers. You can price your programs and offerings at your discretion and please take local rates, taxes, MyFitPicks fees, and other fees into consideration when listing your rates.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">What should I put in my listing?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Your listing description should be an accurate description of the program and what clients can expect. Our community loves discovering new trainers and programs, and the more detailed you can be, the more booking requests you will receive. You can also mention the additional services you offer. If you have particular training policies, rules, expectations, booking terms, cancellation policy, etc please also include this in your listing.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I add payout information?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    All accounts that have a listing must add payout information in order to receive booking requests. MyFitPicks uses Stripe Connect to power payments. Adding your payout information is easy and can be done in these steps:<br><br>

                                    1.  When logged into your MyFitPicks account, click on the top right account avatar and then “Dashboard” on the dropdown.<br><br>

                                    2.  On the left navigation, click on “Payments” which will take you to the “Payment settings”.<br><br>

                                    3.  Enter your contact information (required by Stripe for verification) and bank account information.<br><br>

                                    If at any time you need help with this, please email us at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I accept a booking request?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You can easily accept a booking request by doing the following:<br><br>
                                    1.  When logged into your MyFitPicks account, click on the top right account avatar and then “Dashboard” on the dropdown.<br><br>
                                    2.  On the left navigation, click on “Orders” which will take you to the “Recent Orders”.<br><br>
                                    3.  Click on the booking request messages directly and you will see the option to accept or deny the booking request. Please note that you can also message the users directly on the request to clarify and details or let them know about availability.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I have to accept a request?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You are not required to accept a request and may decline any request. If you take no action to accept or deny a request, the booking request will automatically expire in 24 hours. If you missed the request by accident, you can message the user directly from their expired request and suggest that they make another request.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How long do I have to respond to booking requests?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                   You have 24 hours to either accept or deny a booking request. After 24 hours, the booking request will automatically expire. If you missed the request by accident, you can message the user directly from their expired request and suggest that they make another request.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How can I modify a booking request?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Once a booking request is sent, the dates, amount, and details of the booking request cannot be modified. This is a booking agreement, so please note that we require the booking request to be resend with the accurate dates, time, price, and details per our <a href="#">Service Agreement</a> and <a href="#">Community Guidelines</a>.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I charge for additional services?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    If you offer additional services that are not included in your program booking, you can select the option for this to be displayed on your program listing. This can be done during your initial program listing creation or by editing at any time from your dashboard. 
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Can I require a deposit?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We do not currently have a deposit option, but instead only offer full booking payments to be accepted on our platform. If you require a deposit, accept a booking request, and do not use MyFitPicks for the full payment of this, please note that this is outside our <a href="#">Service Agreement</a> and <a href="#">Booking Agreement</a>.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How can I enforce a cancellation policy?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    We let trainers identify their individual cancellation policies, so we also let them message with users and bookings directly to communicate availability, changes in dates, booking modifications, and also cancellation policy enforcement. In the event that this can not be agreed upon directly with an user and trainer, you can email us at admin@myfitpicks.com directly.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">I accepted a booking request. When will the money for the booking be in my account?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    The amount that you made from the booking will appear in the bank account that you entered your payout information for within a few business days following the booking date. This time period is typically 7-10 business days for the first transfer and is then quicker for following transfers. This process is handled by Stripe. Rest assured that once you accept a booking request, the person that booked your program has been charged for the booking and paid for it. If you have any questions about this at any time, please email us at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I have to report and pay taxes for personal training income?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You must legally report income generated from MyFitPicks to your business and it is your responsibility to do so. If you are responsible for charging local taxes on services, you must also comply with these regulations.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                    </div>
                    <!-- Accordion / End -->

                    <div class="section-headline margin-top-45 margin-bottom-30">
                        <h4>Trainees</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion js-accordion">

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I request to book a trainer or program?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Booking a program is easy on MyFitPicks and you can do so by creating a user account if you have not done so already. Once you do, you can then select a date and time on an individual program listing and click “Request to book”. You can enter your payment information and send the booking request to the trainer.<br><br>
                                    You will only be charged if the trainer accepts your booking request within 24 hours. If they do not accept or deny your booking request within 24 hours, it will automatically expire and you will not be charged.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I request a certain time, rate, or option that is not available but indicated on the listing and I need?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    If you are having trouble with a booking request, you can easily message the listing owner directly from the program listing. Please note that it is against our Community Guidelines to send personal contact information or transact off our platform.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">I made a booking request to a trainer and I see a hold on my card even though the request was just denied. Is this a charge?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    When you submit a booking request, a temporary hold is placed on your card until the request is accepted, denied, or it expires. If the request is accepted, your card is charged for the booking request amount. If the booking request is denied or expires, your card is not charged and the amount is no longer held. This time period is dependant on your bank, but holds are typically released by the next business day. Your card will not be charged for denied or expired bookings for any reason. If you have any questions about this, please email us at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Is a booking request binding?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    A booking request is not binding, it is simply letting a trainer know you intend to book. A request is a binding Booking Agreement once accepted by the listing owner though. If you sent a request by mistake, need to modify it, or cancel, we encourage you to immediately notify the trainer using our messaging system. Each trainer listing enforces their own cancellation policy identified on their listing, so please keep this in mind prior to submitting a booking request. If you require assistance with a booking request, you can send us a message at any time at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How many requests can I send?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You can send multiple requests, but we strongly recommend that you wait to hear back from a trainer once you send a request. If the request is urgent, you can also send them a message regarding the booking request directly from their listing.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How long will it take for a trainer to respond to my request?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Trainers are typically very responsive and reply back as soon as they receive a booking request. If you do not hear back from a trainer regarding your request, you can also send them a message regarding the booking request directly from their listing.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Is there a minimum or maximum booking duration?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    MyFitPicks does not require an hourly minimum for program or trainer listings, but we rather let trainers individually indicate their hourly minimums directly on their listing. If they mention an hourly minimum in their description, please note that they might not accept your booking request if it does not comply with their hourly minimum.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Can I modify a booking once it has been sent as a booking request?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Once a booking request has been sent it can not be modified. You can however message the trainer directly, request for them to cancel, and resubmit another booking request.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">When is a booking confirmed?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    A booking is confirmed once indicated as completed by the trainer.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How can I be safe and cautious when using MyFitPicks?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    While we do everything that we can to build the most trusted community of fitness trainers, we rely on our community of users to help us by being proactive and always reporting any suspicious activity on our platform. We also have <a href="#">Community Guidelines</a> in that outlines this in more detail.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->
                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I have to communicate on MyFitPicks?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Yes, we ask that you never take communication outside of our platform messaging and never give your contact information prior to entering a Booking Agreement. We also have <a href="#">Community Guidelines</a> in place that outlines this in more detail.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                    </div>
                    <!-- Accordion / End -->


                    <div class="section-headline margin-top-45 margin-bottom-30">
                        <h4>My Account</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion js-accordion">

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I create an account?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You can create a user account in minutes doing the following:<br><br>
                                    1.  Click “Log in / Register” at the top right, then click the “Register” tab.<br><br>
                                    2.  Enter your name, email address, and create a secure password.<br><br>
                                    3.  Please check the email address you entered and confirm the email.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I reply to messages and booking requests?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    You can reply to messages and accept a booking request by doing the following:<br><br>
                                    1.  When logged into your MyFitPicks account, click on the messages envelope in the top right navigation.<br><br>
                                    2.  To view booking requests, on the left side navigation of your dashboard, select the “Order History”.

                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I report suspicious account activity?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Please report any suspicious activity immediately by sending us an email at admin@myfitpicks.com.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->


                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">How do I report other users for acting against MyFitPicks policies?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Please report any suspicious activity or users immediately by sending us an email at admin@myfitpicks.com. Or by reporting an individual listing using the “Report Listing” link located on the right-hand side. 
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                    </div>
                    <!-- Accordion / End -->

                    <div class="section-headline margin-top-45 margin-bottom-30">
                        <h4>Legal &amp; Insurance</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion js-accordion">

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I need insurance for my fitness training business?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Yes, you should have an insurance policy in place for your business prior to listing it on MyFitPicks.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item active">
                            <div class="accordion-header js-accordion-header">Does MyFitPicks offer insurance?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    No, MyFitPicks does not offer marketplace insurance for bookings and instead suggest that all trainers adequately insure their business prior to listing it on MyFitPicks.
                                </div>
                                
                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                        <!-- Accordion Item -->
                        <div class="accordion__item js-accordion-item">
                            <div class="accordion-header js-accordion-header">Do I need users to sign an agreement, sign a waiver, or any other form of agreement?</div> 

                            <!-- Accordtion Body -->
                            <div class="accordion-body js-accordion-body">

                                <!-- Accordion Content -->
                                <div class="accordion-body__contents">
                                    Your Booking Agreement through MyFitPicks is an agreement between the trainer and client as defined in the listing for the exact date, time period, and for that price. If you have further requirements, please notify a booking request directly and ensure they are aware of these prior to accepting the booking request, prior to the booking time.
                                </div>

                            </div>
                            <!-- Accordion Body / End -->
                        </div>
                        <!-- Accordion Item / End -->

                    </div>
                    <!-- Accordion / End -->
                ',
                'seo_title' => 'Help',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),

            3 => 
            array (
                'id' => 4,
                'locale' => 'en',
                'title' => 'MyFitPicks Community Guidelines',
                'slug' => 'community-guidelines',
                'content' => '

                <div class="">
                    <p class="">Updated September 1, 2018 </p>
                    <p>MyFitPicks is the most trusted online marketplace to purchase fitness programs and personal training sessions for a reason, which is the outstanding community that we have of both trainers and trainees. We’re built on the foundation of trust, best interest of our community, and thus we do have Community Guidelines that we’ve created and actively enforce. We take violations of these Community Guidelines seriously and may suspend or terminate an Account for ongoing or serious violations. Fraudulent or illegal activity may also be subject to legal action taken. We reserve the right to also edit or remove content on our site that violates these Community Guidelines or if we believe it adversely affects the integrity of the MyFitPicks marketplace or it’s users. </p>
                    <p>These Community Guidelines are part of and use words and phrases that are identified in our Terms of Service (Services Agreement). If you have any questions about these Community Guidelines or if you believe that a user has violated these Community Guidelines, please email us immediately at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>. </p>
                    <h2 class="mb-3 mt-5">Trainers must:</h2>
                    <h3>1. Comply with local laws, local zoning ordinances, and tax laws at all times.</h3>
                    <p>MyFitPicks is not liable for ensuring compliance and it is the responsibility of trainers and each listing owner to ensure all local laws, zoning ordinance, and also tax compliance are met. You must also legally report income generated from MyFitPicks to your business and it is your responsibility to do so. If you are responsible for charging local taxes on services, you must also comply with these regulations.</p>
                    <h3>2. Accurate representation of the programs, trainers, pricing, and services of each fitness training business.</h3>
                    <p>Most clients and those looking to book your services have not met you in person prior to booking, so be honest and clearly represent the programs, trainers, and the services that you are offering. Do not misrepresent pricing or dishonestly make claims by any means. We will take proactive action if it is reported or discovered that you are misrepresenting your trainers, programs, or the services that you offer.</p>
                    <h3>3. Only list and offer a program or trainer that you are permissioned to offer.</h3>
                    <p>Only list the training services that you are permissioned to offer and have the authority to do so. If it is discovered that you are offering services on MyFitPicks that you do not have permission to offer, the listing will be immediately removed and your account is subject to be removed from our site.</p>
                    <h2 class="mb-3 mt-5">Trainees must:</h2>
                    <h3>1. Comply with all trainer policies, and booking agreements.</h3>
                    <p>All trainers and those that have booked a program or trainer through MyFitPicks must only use the trainers services as agreed upon in the booking agreement. Trainers take pride in their businesses, the equipment, and their profession and will be expecting the same professional respect and courtesy that they are providing.</p>
                    <h3>2. Never engage in illegal or prohibited activity on training premises.</h3>
                    <p>All local laws are enforceable and training business owners can notify authorities if laws are being broken on their property or on their premises. Never engage in any illegal activity on training property or premises.</p>
                    <h2 class="mb-3 mt-5">Everyone must:</h2>
                    <h3>1. Communicate honestly with others.</h3>
                    <p>MyFitPicks is a trusted marketplace and depends on the honesty, integrity, and best interest of everyone that uses the platform. Only message others with the best intent in mind, do not make false claims, misrepresentations, do not engage in fraudulent activity, and do not willingly be deceitful.</p>
                    <h3>2. Transact honestly and with the intended use of MyFitPicks.</h3>
                    <p>MyFitPicks is intended to be a marketplace for users to book personal trainers and programs and for trainers to offer their programs. Any transactions that are not intended for this purpose, are misrepresented, have fraudulent intent, or otherwise deemed harmful to either user will be immediately reviewed and if fraudulent, legal action will be taken by MyFitPicks if deemed necessary. All users and transactions are also applicable to the Terms of Service that is agreed upon by using the platform.</p>
                    <h3>3. Respect others privacy and information.</h3>
                    <p>Many trainers are world-renowned professionals. Some trainers may also have well-known clients present at the gym during your session. It is professional and common courtesy to respect the privacy of the trainers, others on the premise, and the information of both the trainers and professionals that may be offering training services. If there is ever an issue with privacy, security, or rules, please send us an email immediately at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>.</p>
                </div>

                ',
                'seo_title' => 'Community Guidelines',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            ),

            4 => 
            array (
                'id' => 5,
                'locale' => 'en',
                'title' => 'MyFitPicks Fees',
                'slug' => 'fees',
                'content' => '
                <div class="">
                    <p class="">Updated September 1, 2018 </p>
                    <p>This is an overview of fees on MyFitPicks for creating a listing, accepting a booking request, and also booking fees by trainers. These fees are also referenced in the Terms of Service (Service Agreement) and are accepted fees by using this platform.</p>
                    <p>If you have questions at any time regarding fees, please email us at <a href="mailto:admin@myfitpicks.com">admin@myfitpicks.com</a>.</p>
                    <h2 class="mb-3 mt-5">Marketplace (Booking) Fees:</h2>
                    <p>MyFitPicks charges 15% for the total of each booking as a service fee. This amount is automatically added to the total amount shown on the booking total prior to a booking request being sent. This amount is charged to the account you entered for payment when a booking request is accepted. All booking requests will automatically expire 24 hours after sent if not accepted by the listing owner. In the event of a dispute or other event, the transaction amount may be withheld per the Services Agreement.</p>
                </div>
                ',
                'seo_title' => 'Community Guidelines',
                'seo_meta_description' => NULL,
                'seo_meta_keywords' => NULL,
                'visible' => 1,
                'published_at' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => NULL,
            )
        ));        
    }
}

// php artisan db:seed --class=PageTranslationsTableSeeder