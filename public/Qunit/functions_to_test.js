function calculate_change_due(final_total_ammount, ammount_given){
                  if(final_total_ammount > ammount_given){
                    return "enter correct ammount";
                  }
                  if(final_total_ammount < ammount_given){
                      return ammount_given - final_total_ammount;
                  }
                  if (final_total_ammount == ammount_given) {
                      return 0;
                  }

                }

function calculate_final_total_ammount(total_ammount, vat_percent, discount_percent){
                  vat_ammount = parseFloat((vat_percent/100) * total_ammount);
                  discount_ammount = parseFloat((discount_percent/100) * total_ammount);
                  final_ammount = (total_ammount + vat_ammount) - discount_ammount;
                  return final_ammount;
                }